//= require jquery.turbolinks
/*
 * Cac plugin trong website
 * 
 * 
 */
(function($) {
    /*
     * Plugin urlParam
     * Load cart form
     * 
     */
    $.urlParam = function(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results === null) {
            return null;
        }
        else {
            return results[1] || 0;
        }
    };

    Number.prototype.format = function() {
        return this.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    };

})(jQuery);