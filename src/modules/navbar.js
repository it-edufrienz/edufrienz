import $ from 'jquery';

class edu_NavbarJS {
    constructor() {
        this.activeSimpleDropdown = null;
        this.isDesktop = $(window).width() >= 768;
        this.$window = $(window);
        this.initElements();
        this.bindEvents();
    }

    initElements() {
        this.$elements = {
            body: $('body'),
            navbar: $('.navbar'),
            header: $('.site-header'),
            megaMenu: $('.dropdown-menu.depth_0'),
            mobileSearchToggle: $('.mobile-search-toggle'),
            mobileSearchForm: $('.mobile-search-form'),
            navbarBottom: $('.navbar-bottom')
        };
    }

    bindEvents() {
        this.bindDropdownEvents();
        this.bindDepth1Events();
        this.bindOutsideClickEvents();
        this.bindResizeEvents();
        this.bindMobileSearchEvents();
        this.bindSimpleDropdownEvents();
        this.bindBootstrapDropdownEvents();
        this.bindMegaMenuClickEvents();
    }

    bindDropdownEvents() {
        $(document).on('hide.bs.dropdown', (e) => {
            if ($(e.target).closest('.dropdown-menu.depth_1').length) {
                e.preventDefault();
                return false;
            }
        });
    }

    bindDepth1Events() {
        $(document).on(
            'click',
            '.dropdown-menu.depth_1 > li.menu-item-has-children > a',
            (e) => this.handleDepth1Click(e)
        );
    }

    bindOutsideClickEvents() {
        $(document).on('click', (e) => {
            const $target = $(e.target);
            if ($target.closest('.dropdown').length) return;
            
            this.closeAllSimpleDropdowns();
            this.closeAllMegaMenus();
        });
    }

    bindResizeEvents() {
        this.$window.on('resize', () => {
            this.isDesktop = $(window).width() >= 768;
            this.handleResize();
        });
        
        this.$window.on('orientationchange', () => {
            setTimeout(() => {
                this.isDesktop = $(window).width() >= 768;
                this.handleResize();
            }, 100);
        });
    }

    bindMobileSearchEvents() {
        if (this.$elements.mobileSearchToggle.length) {
            this.$elements.mobileSearchToggle.on('click', (e) => {
                e.preventDefault();
                this.$elements.mobileSearchForm.slideToggle();
            });
        }
    }

    bindSimpleDropdownEvents() {
        $(document).on('click', '.simple-dropdown > a.dropdown-toggle', 
            (e) => this.handleSimpleDropdownClick(e)
        );
    }

    bindBootstrapDropdownEvents() {
        $(document).on(
            'show.bs.dropdown',
            '.menu-item-has-children:not(.simple-dropdown) > a.dropdown-toggle',
            () => this.closeAllSimpleDropdowns()
        );

        $(document).on('hidden.bs.dropdown', () => 
            this.closeAllSimpleDropdowns()
        );

        $(document).on('shown.bs.dropdown', () => 
            this.cleanupSimpleDropdowns()
        );
    }

    bindMegaMenuClickEvents() {
        $(document).on('click', '.dropdown-menu, .dropdown-menu *', (e) => {
            e.stopPropagation();
        });
    }

    // Event Handlers
    handleDepth1Click(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        
        const $this = $(e.currentTarget);
        const $submenu = $this.next('.dropdown-menu.depth_2');
        
        if ($submenu.length) {
            this.toggleDepth2Menu($this, $submenu);
        }
        
        return false;
    }

    handleSimpleDropdownClick(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        $('.navbar .dropdown.show')
            .not('.simple-dropdown')
            .removeClass('show')
            .children('.dropdown-menu')
            .removeClass('show');

        const $li = $(e.currentTarget).closest('.simple-dropdown');
        const $menu = $li.children('.dropdown-menu');
        const isOpen = $li.hasClass('show');

        this.closeAllSimpleDropdowns();
        if (isOpen) return;

        $li.addClass('show');
        $menu.addClass('show');
        $(e.currentTarget).addClass('show');
        this.activeSimpleDropdown = { $li, $menu };

        requestAnimationFrame(() => {
            this.positionSimpleDropdown($li, $menu);
        });
    }

    // Menu Operations
    toggleDepth2Menu($link, $submenu) {
        $link.toggleClass('show');
        
        $('.dropdown-menu.depth_2.show').not($submenu).removeClass('show');
        $('.dropdown-menu.depth_1 > li.menu-item-has-children > a.show')
            .not($link)
            .removeClass('show');
        
        $submenu.toggleClass('show');
        
        if (this.isDesktop && $submenu.hasClass('show')) {
            this.positionDepth2Menu($link, $submenu);
        }
        
        console.log('Clicked on:', $link.text().trim());
    }

    // Positioning Methods
    positionDepth2Menu($link, $submenu) {
        const $parentLi = $link.closest('li');
        const parentOffset = $parentLi.offset();
        const parentWidth = $parentLi.outerWidth();
        
        $submenu.css({
            'position': 'absolute',
            'left': parentWidth + 'px',
            'top': '0',
            'z-index': '1001'
        });
        
        const submenuWidth = $submenu.outerWidth();
        const viewportWidth = $(window).width();
        const potentialRight = parentOffset.left + parentWidth + submenuWidth;
        
        if (potentialRight > viewportWidth - 20) {
            $submenu.css({ 'left': -submenuWidth + 'px' });
        }
    }

    positionSimpleDropdown($li, $menu) {
        if (window.matchMedia('(max-width: 575.98px)').matches) return;
        
        const $navbar = this.$elements.navbarBottom;
        if (!$navbar.length) return;

        $menu.css({ left: '', right: '' });

        const liRect = $li[0].getBoundingClientRect();
        const navRect = $navbar[0].getBoundingClientRect();
        let left = liRect.left - navRect.left;
        const gap = 10;
        const vw = document.documentElement.clientWidth;

        $menu.css({ left: `${left}px` });
        const rect = $menu[0].getBoundingClientRect();

        if (rect.right > vw - gap) {
            left -= (rect.right - vw + gap);
            $menu.css({ left: `${left}px` });
        }

        if (rect.left < gap) {
            $menu.css({ left: 'auto', right: '0' });
        }
    }

    // Resize Handling
    handleResize() {
        $('.dropdown-menu.depth_2.show').each((index, element) => {
            const $submenu = $(element);
            const $parentLink = $submenu.prev('a');
            const $parentLi = $parentLink.closest('li');
            
            if (this.isDesktop && $submenu.hasClass('show')) {
                const parentWidth = $parentLi.outerWidth();
                $submenu.css({ 'left': parentWidth + 'px', 'top': '0' });
            }
        });
        
        if (this.activeSimpleDropdown && this.activeSimpleDropdown.$menu.hasClass('show')) {
            this.positionSimpleDropdown(
                this.activeSimpleDropdown.$li, 
                this.activeSimpleDropdown.$menu
            );
        }
    }

    // Cleanup Methods
    cleanupSimpleDropdowns() {
        $('.simple-dropdown').removeClass('show');
        $('.simple-dropdown .dropdown-menu').removeClass('show');
        $('.simple-dropdown > a.dropdown-toggle').removeClass('show');
        this.activeSimpleDropdown = null;
    }

    closeAllSimpleDropdowns() {
        $('.simple-dropdown').removeClass('show');
        $('.simple-dropdown .dropdown-menu.depth_0').removeClass('show');
        $('.simple-dropdown > a.dropdown-toggle').removeClass('show');
        this.activeSimpleDropdown = null;
    }

    closeAllMegaMenus() {
        $('.menu-item-has-children:not(.simple-dropdown)').removeClass('show');
        $('.menu-item-has-children:not(.simple-dropdown) > .dropdown-menu').removeClass('show');
        $('.menu-item-has-children:not(.simple-dropdown) > a.dropdown-toggle').removeClass('show');
        
        $('.dropdown-menu.depth_2').removeClass('show');
        $('.dropdown-menu.depth_1 > li.menu-item-has-children > a').removeClass('show');
    }
}
export default edu_NavbarJS;