/**
 * Support functions fot Top Ten Topic
 * @author: Sir Xiradorn <http://xiradorn.it>
 */

(function() {
	/**
	 * Modular TTT functions
	 */
	 var ttt = {
	 	init: function() {
	 		this.domScope();
	 		this.render();
	 	},

	 	domScope: function() {
	 		this.$selectorOption = $('.xttt_select');
	 		this.$selectorForm = $('#xttt_form');
	 		/* filters targeting */
	 		this.$dt = $('dt.xttt-one_third');
			this.$dd = $('dd.xttt-one_third');
			/* filters buttons */
			this.$filterBtn = $('.xttt-filter_btn');
			this.$most_t = $('.xtttf_most_view');
			this.$last_t = $('.xtttf_last_topic');
			this.$last_p = $('.xtttf_last_post');
	 	},

	 	render: function() {
	 		this.$selectorOption.on('change', this.submitForm);
	 		/* filters */
	 		this.$filterBtn.on('click', this.filterTTT);
	 	},

	 	submitForm: function() {
	 		this.form.submit();
	 	},

	 	filterTTT: function() {
	 		// under building
	 	},

	 	responsive: function(element, hide) {
	 		if (!hide) {
	 			element.addClass('responsive-show');
				element.removeClass('responsive-hide');
				element.attr('style', 'display: block !important;');
			} else {
				element.addClass('responsive-hide');
				element.removeClass('responsive-show');
				element.attr('style', 'display: none !important;');
			}
	 	}
	 }

	 // Laucher function
	 ttt.init();
})();