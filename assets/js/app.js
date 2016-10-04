$( document ).ready(function(){
	// nav bar
	$(".button-collapse").sideNav();
	// select input
	$('select').material_select();
	// datepicker
	$('.datepicker').pickadate({
		  labelMonthNext: 'Prochain mois',
		  labelMonthPrev: 'Précédent mois',
		  labelMonthSelect: 'Selectionnez un mois',
		  labelYearSelect: 'Selectionnez une année',
		  monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
		  monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Jui', 'Août', 'Sep', 'Oct', 'Nov', 'Dec' ],
		  weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
		  weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
		  weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
		  today: 'Maint..',
		  clear: 'Effacer',
		  close: 'Fermer'
	});

})