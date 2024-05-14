//active class starts

const navbar = document.querySelector(".navbar");

document.querySelector("#ham-menu").onclick = () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
};

const searchForm = document.querySelector(".search-form");

document.querySelector(".search").onclick = () => {
  searchForm.classList.toggle("active");
  navbar.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.remove("active");
  searchForm.classList.remove("active");
};

//active class ends


const pencarian = document.querySelector(".pencarian");


let isDragStart = false,
  prevPageX,
  prevScrollLeft;


const dragPencarianStart = (e) => {
  isDragStart = true;
  prevPageX = e.pageX;
  prevScrollLeft = pencarian.scrollLeft;
};

const draggingPencarian = (e) => {
  if (!isDragStart) return;
  e.preventDefault();
  let positionDiff = e.pageX - prevPageX;
  pencarian.scrollLeft = prevScrollLeft - positionDiff;
};

const dragStop = () => {
  isDragStart = false;
};

pencarian.addEventListener("mousedown", dragPencarianStart);
pencarian.addEventListener("mousemove", draggingPencarian);
pencarian.addEventListener("mouseup", dragStop);

// drag class ends