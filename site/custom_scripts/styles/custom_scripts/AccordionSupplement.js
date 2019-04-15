var AccordionSupplement = function (div) {

    this.testCssTransitionSupport = function (){
        var style = (document.body || document.documentElement).style;
        this.hasCssTransitionSupport = style.transition       !== undefined ||
                                       style.WebkitTransition !== undefined ||
                                       style.MozTransition    !== undefined ||
                                       style.MsTransition     !== undefined ||
                                       style.OTransition      !== undefined;
    }

    this.headingClick = function (ev) {
        var body = $(ev.currentTarget).next('.accordion_body');
        $('.accordion_body').each($.proxy(function(i, div){
            if (div !== body[0]) {
                if (!this.hasCssTransitionSupport) {
                    $(div).slideUp();
                }
                $(div).removeClass('accordion__open');
            }
        },this));
        if (!this.hasCssTransitionSupport) {
            body.slideToggle();
        }
        body.toggleClass('accordion__open');
    }

    this.els = {};
    this.els.div = $(div);

    if (!this.els.div) return;

    this.testCssTransitionSupport();

    this.els.heading = this.els.div.children('h2').click($.proxy(this.headingClick, this));
}
