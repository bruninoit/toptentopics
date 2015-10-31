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
	 	},

	 	render: function() {
	 		this.$selectorOption.on('change', this.submitForm);
	 	},

	 	submitForm: function() {
	 		this.form.submit();
	 	}
	 }

	 // Laucher function
	 ttt.init();
})();