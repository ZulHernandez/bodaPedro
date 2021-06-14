data = [
	{
		img: "url(../../../../src/imgs/slides/1.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/2.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/3.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/4.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/5.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/6.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/7.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/8.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/9.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/10.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/11.jpeg)",
	},
	{
		img: "url(../../../../src/imgs/slides/12.jpeg)",
	},
];

function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = data[num].img;
    const cimg = document.getElementById("c-img");
    cimg.style.backgroundImage = img;
}