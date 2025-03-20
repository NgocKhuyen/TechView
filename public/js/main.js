document.addEventListener("DOMContentLoaded", function () {
    const customerList = document.querySelector(".customer-list .row");
    const customerItems = document.querySelectorAll(".customer-list .col");
    let index = 0;
    const visibleItems = 3; // Số sản phẩm hiển thị
    const totalItems = customerItems.length;
    const slideInterval = 3000; // 3 giây

    function slideCustomers() {
        index++;
        if (index > totalItems - visibleItems) {
            index = 0; // Quay lại sản phẩm đầu tiên
        }

        // Hiện sản phẩm thứ 4 khi cần
        if (index === totalItems - visibleItems) {
            customerItems[index + visibleItems - 1].style.display = "block";
        }

        // Dịch chuyển row sang trái
        const translateValue = -index * (100 / visibleItems) + "%";
        customerList.style.transform = `translateX(${translateValue})`;
    }

    // Thêm CSS transition
    customerList.style.transition = "transform 1s ease-in-out";

    // Chạy tự động mỗi 3 giây
    setInterval(slideCustomers, slideInterval);
});

document.addEventListener("DOMContentLoaded", function () {
    const productContainer = document.querySelector(".product-container");
    const dots = document.querySelectorAll(".dot");
    const product = document.querySelector(".product");

    const productWidth = product.getBoundingClientRect().width; // Chiều rộng SP (cả padding, border)
    const paddingOffset = 24; // Padding trái phải tổng cộng 12px + 12px
    const adjustedWidth = productWidth + paddingOffset;

    let currentIndex = 0;

    function updateSlidePosition() {
        productContainer.style.transform = `translateX(${-currentIndex * adjustedWidth}px)`;
    }

    function moveSlide(index) {
        currentIndex = index;
        updateSlidePosition();
        updateActiveDot();
    }

    function updateActiveDot() {
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", function () {
            moveSlide(index);
        });
    });

    updateSlidePosition();
});
// menu category
document.querySelector(".header__menu-category").addEventListener("click", function () {
    document.querySelector(".header__list").classList.toggle("active");
});

// slider 
let slideIndex = 0;
showSlides();
function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (slides.length === 0) return; 
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

// hidden password
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-password").forEach(icon => {
        icon.addEventListener("click", function () {
            let input = document.getElementById(this.getAttribute("data-target"));
            if (input) {
                input.type = input.type === "password" ? "text" : "password";
                this.classList.toggle("fa-eye-slash");
                this.classList.toggle("fa-eye");
            }
        });
    });
});

// Register vs login
const currentPage = window.location.pathname;
document.querySelectorAll(".auth-link").forEach(link => {
    // Lấy pathname của link (bỏ phần domain)
    const linkPath = new URL(link.href).pathname;

    if (currentPage === linkPath) {
        link.classList.add("active-login");
    }
});

// 
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".title-info");
    const sections = document.querySelectorAll(".content-section");

    // Mặc định đặt "Thông tin tài khoản" là active
    tabs[0].classList.add("section-active");
    sections[0].classList.add("section-active");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function () {
            // Xóa class section-active khỏi tất cả
            tabs.forEach(t => t.classList.remove("section-active"));
            sections.forEach(s => s.classList.remove("section-active"));

            // Thêm class section-active vào phần tử được click
            this.classList.add("section-active");
            sections[index].classList.add("section-active");
        });
    });
});

// modal
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal_address");
    const overlay = document.querySelector(".modal_overlay");
    const btnAdd = document.querySelector(".btn-address");
    const btnEdit = document.querySelector(".btn-edit");
    const btnClose = document.querySelectorAll(".close-modal");
    const btnSubmit = document.querySelector(".btn-add");
    const title = document.querySelector(".title-address");

    function openModal(mode) {
        modal.style.display = "block";
        overlay.style.display = "block";

        if (mode === "add") {
            title.textContent = "THÊM ĐỊA CHỈ";
            btnSubmit.textContent = "THÊM ĐỊA CHỈ";
        } else {
            title.textContent = "CẬP NHẬT ĐỊA CHỈ";
            btnSubmit.textContent = "CẬP NHẬT ĐỊA CHỈ";
        }
    }

    function closeModal() {
        modal.style.display = "none";
        overlay.style.display = "none";
    }

    btnAdd.addEventListener("click", function () {
        openModal("add");
    });

    btnEdit.addEventListener("click", function () {
        openModal("edit");
    });

    btnClose.forEach(btn => btn.addEventListener("click", closeModal));

    overlay.addEventListener("click", closeModal);
});


