// 							SELECT BOX
// ========================================================
// ========================================================

if (document.querySelector(".select-beast")) {

	document.querySelectorAll('.select-beast').forEach((el)=>{
		if (el.classList.contains('select-flag')) {
			var settings = {
				render: {
			 		option: function (data, escape) {
						return `<div class="text-center px-0"><img class="me-2 text-center" src="${data.src}" width="26">${data.text}</div>`;
					},
					item: function (item, escape) {
						return `<div><img class="me-3" src="${item.src}" width="26">${item.text}</div>`;
					}
				}
			}
		} else {
			var settings = {
				create: true,
			}
		}
		
	 	new TomSelect(el, settings);
	});		
}