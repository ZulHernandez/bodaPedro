data = [
	{
		img: "url(../../../../src/imgs/slides/1.jpeg)",
		imgp: "src/imgs/slides/1.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/2.jpeg)",
		imgp: "../../../../src/imgs/slides/2.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/3.jpeg)",
		imgp: "../../../../src/imgs/slides/3.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/4.jpeg)",
		imgp: "../../../../src/imgs/slides/4.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/5.jpeg)",
		imgp: "../../../../src/imgs/slides/5.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/6.jpeg)",
		imgp: "../../../../src/imgs/slides/6.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/7.jpeg)",
		imgp: "../../../../src/imgs/slides/7.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/8.jpeg)",
		imgp: "../../../../src/imgs/slides/8.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/9.jpeg)",
		imgp: "../../../../src/imgs/slides/9.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/10.jpeg)",
		imgp: "../../../../src/imgs/slides/10.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/11.jpeg)",
		imgp: "../../../../src/imgs/slides/11.jpeg"
	},{
		img: "url(../../../../src/imgs/slides/12.jpeg)",
		imgp: "../../../../src/imgs/slides/12.jpeg"
	}	
];

function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '100%',
        padding: '0vw',
		customClass: 'swal-height'
    });
    let img = data[num].img;
	let imgp = data[num].imgp;
    const cimg = document.getElementById("c-img");
	const photo = document.getElementById("photo");
    //cimg.style.backgroundImage = img;
	photo.src= imgp;
}