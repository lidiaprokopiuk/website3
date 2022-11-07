// 							CALENDER 
// ========================================================
// ========================================================

const calender = document.querySelector(".calender");
if (calender) {

	const date = new Date();

	const renderCalendar = () => {
		date.setDate(1);

		const monthDays = document.querySelector(".days");

		const lastDay = new Date(
			date.getFullYear(),
			date.getMonth() + 1,
			0
		).getDate();

		const prevLastDay = new Date(
			date.getFullYear(),
			date.getMonth(),
			0
		).getDate();

		const firstDayIndex = date.getDay();



		const lastDayIndex = new Date(
			date.getFullYear(),
			date.getMonth() + 1,
			0
		).getDay();

		const nextDays = 7 - lastDayIndex - 1;

		const months = [
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		];

		document.querySelector(".currentMonth").innerHTML = months[date.getMonth()] + ' ' + date.getFullYear();

		let days = "";

		for (let x = firstDayIndex; x > 0; x--) {
			days += `<div class="date prev-date"><span>${prevLastDay - x + 1}</span></div>`;
		}

		for (let i = 1; i <= lastDay; i++) {
			if (
				i === new Date().getDate() &&
				date.getMonth() === new Date().getMonth()
			) {
				days += `<div class="date today available"><span>${i}</span></div>`;
				
			} else {				
				let today = new Date().getDate();
				if (today > i && date.getMonth() === new Date().getMonth()) {
					days += `<div class="date disable"><span>${i}</span></div>`
				} else {
					days += `<div class="date available"><span>${i}</span></div>`;
				}				
			}
		}

		for (let j = 1; j <= nextDays; j++) {
			days += `<div class="date next-date"><span>${j}</span></div>`;
			monthDays.innerHTML = days;
		}

		const availableDates = document.querySelectorAll('.date.available');

		// availableDates.forEach((availableDate) => {

		// 	availableDate.addEventListener('click', (event) => {
		// 		event.target.parentNode.classList.add('selected');

		// 		let selectDay = ('0' + event.target.innerHTML).slice(-2);
		// 		let getMonth = date.getMonth()+1;
		// 		let selectMonth = ('0' + getMonth).slice(-2);
		// 		let selectYear = date.getFullYear();

		// 		document.querySelector('.selectedDate').innerHTML = selectDay + '.' + selectMonth + '.' + selectYear;
		// 	});
		// });

		for (var c = 0; c < availableDates.length; c++) {
			availableDates[c].addEventListener('click', (event) => {
				//event.target.parentNode.classList.add('selected');

				var current = document.getElementsByClassName("selected");
				if (current.length > 0) { 
					current[0].className = current[0].className.replace(" selected", "");
				}
				event.target.parentNode.className += " selected";
				
				let selectDay = ('0' + event.target.innerHTML).slice(-2);
		 		let getMonth = date.getMonth()+1;
 				let selectMonth = ('0' + getMonth).slice(-2);
 				let selectYear = date.getFullYear();
				document.querySelector('.selectedDate').innerHTML = selectDay + '.' + selectMonth + '.' + selectYear;

			})
		}

	};

	document.querySelector(".prev").addEventListener("click", () => {
		date.setMonth(date.getMonth() - 1);
		renderCalendar();
	});

	document.querySelector(".next").addEventListener("click", () => {
		date.setMonth(date.getMonth() + 1);
		renderCalendar();
	});

	renderCalendar();
}