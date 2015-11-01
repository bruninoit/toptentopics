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
			this.$ddl = $('dd.xttt-one_third_last');
			/* filters buttons */
			this.$filterBtn = $('.xttt-filter_btn');
	 	},

	 	render: function() {
	 		this.$selectorOption.on('change', this.submitForm);
	 		/* filters */
	 		this.$filterBtn.on('click', this.filterTTT.bind(this));
	 	},

	 	submitForm: function() {
	 		this.form.submit();
	 	},

	 	filterTTT: function(e) {
	 		e.preventDefault();
	 		var trg;

	 		trg = $(e.target);
	 		console.log(this.$dt);

	 		if(trg.hasClass('xtttf_most_view')) {
	 			this.hideCall(false, true, true);
	 		} else if (trg.hasClass('xtttf_last_topic')) {
	 			this.hideCall(true, false, true);
	 		} else if (trg.hasClass('xtttf_last_post')) {
	 			this.hideCall(true, true, false);
	 		}
	 	},

	 	hideCall: function(dt_hide, dd_hide, ddl_hide) {
	 		this.hiderTarget(this.$dt, dt_hide);
 			this.hiderTarget(this.$dd, dd_hide);
 			this.hiderTarget(this.$ddl, ddl_hide);
	 	},

	 	hiderTarget: function(element, hide) {
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