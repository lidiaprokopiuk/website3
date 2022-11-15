
// // 					ADD CLASS SHOW		
// // ========================================================
// // ========================================================

const classShow = document.querySelector('.content-item');
window.addEventListener('resize', () => {
	if(!classShow.classList.contains("show")) {
		classShow.classList.add('show');
	}
	console.log('bom')
})


// // 					SHOW CONTENT		
// // ========================================================
// // ========================================================
	
window.addEventListener("load", (onLoadFunction));

function onLoadFunction(){
	showContent();
	window.addEventListener("resize", showContent);
}

function showContent() {
	if (window.innerWidth < 991.98) {

		const buttonShowContent = document.querySelector('.buttonShowContent');
		const buttonCloseContent = document.querySelectorAll('.buttonCloseContent');

		buttonShowContent.addEventListener('click', () => {
			document.querySelector('.content-item').classList.add('active');
		});
		buttonCloseContent.forEach((closeContent) => {		
			closeContent.addEventListener('click', () => {
				document.querySelector('.content-item').classList.remove('active');
			});
		})
	}
}

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

//				MESSAGE DIALOG HEIGHT
// ========================================================
// ========================================================



window.addEventListener("load", () => {
	windowMessage();
	window.addEventListener("resize", windowMessage);
});

	const updateScroll = document.getElementById("updateScroll");
	const chatHeader = document.querySelector('.chat-header');	
	const chatTextbox = document.querySelector('.message-wrapper');

	function windowMessage() {
		updateScroll.style.height = window.innerHeight - chatHeader.offsetHeight - chatTextbox.offsetHeight + 'px';
		chatTextbox.addEventListener('keypress', () => {
			updateScroll.style.height = window.innerHeight - chatHeader.offsetHeight - chatTextbox.offsetHeight + 'px';
		})

	updateScroll.scrollTo(0, updateScroll.scrollHeight)
	
	const asideHeader = document.querySelector(".aside-box .offcanvas-header");
	document.querySelector(".aside-box .offcanvas-body").style.height = window.innerHeight - asideHeader.offsetHeight + 88 + 'px';
}
	



// 					UPDATE SCROLL
// ========================================================
// ========================================================



const offcanvasChatBody = document.querySelector('#offcanvasChat .offcanvas-body');

offcanvasChatBody.addEventListener("scroll", function() {
	if (offcanvasChatBody.scrollTop === 0) {
		offcanvasChatBody.style.background = 'transparent';
	} else {
		offcanvasChatBody.style.background = 'linear-gradient(90deg, #171718 -10%, #242626 129.9%), rgba(11, 11, 11, 0.4)';
	}
});



// 							FILES
// ========================================================
// ========================================================

const inputFile = document.getElementById('chooseFile');
const preview = document.querySelector('.preview');
inputFile.addEventListener('change', updateFiles);

function updateFiles() {  
	const curFiles = inputFile.files;
	for (const file of curFiles) {
		const listItem = document.createElement('li');
		listItem.classList.add('mb-0', 'lh-1', 'text-gray', 'd-flex', 'align-items-center');	
		listItem.textContent = `${file.name}`;
		const removeFile = document.createElement('button');
		removeFile.classList.add('removeButton', 'text-xxs', 'ms-1', 'text-gray');
		listItem.appendChild(removeFile);
		const removeIcon = document.createElement('i');
		removeIcon.classList.add('icon-close-circle');	
		removeFile.appendChild(removeIcon);
		preview.appendChild(listItem);

		removeFile.addEventListener('click', () => {
			if (confirm("Are you sure?")) {
				removeFile.parentNode.remove();
			}				
		})
	}
}
