// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("active");
});

window.addEventListener("click", function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove("hamburger-active");
    navMenu.classList.remove("active");
  }
});

// DropDown SearchBox
const searchBtn = document.querySelector("#searchBtn");
const searchBox = document.querySelector("#searchBox");
const searchInpt = document.querySelector("#searchInpt");

searchBtn.addEventListener("click", function () {
  searchBox.classList.toggle("active");
  searchInpt.focus();
});

window.addEventListener("click", function (e) {
  if (!searchBtn.contains(e.target) && !searchBox.contains(e.target)) {
    searchBox.classList.remove("active");
  }
});

// To Top Button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  const toTop = document.querySelector("#to-top");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    toTop.classList.remove("hidden");
    toTop.classList.add("flex");
  } else {
    toTop.classList.remove("flex");
    toTop.classList.add("hidden");
  }
}

function scrollToTop() {
  window.scrollTo({ top: 0 });
}

// Close Alert Validation register and login
$(".btn-close").on("click", function () {
  $(this).closest(".my-alert").addClass("hidden");
});

// Product detail
function detailProduct(prd_id) {
  $.ajax({
    url: "detailProduct/" + prd_id,
    method: "GET",
    success: function (data) {
      $("#img-product").attr("src", baseUrl + data.produk_img);
      $("#nama-product").text(data.nama_produk);
      $("#desc-product").text(data.deskripsi);
      $("#harga-product").text("Rp " + data.harga + " / " + data.qty);
      $("#addToCartButton").attr("data-prd-id", prd_id);
      $("#product-detail").removeClass("hidden").addClass("flex");
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Error:", textStatus, errorThrown);
    },
  });
}

$(".closeDetail").on("click", function () {
  $("#product-detail").removeClass("flex").addClass("hidden");
});

function addToCartFromButton() {
  const prd_id = $("#addToCartButton").attr("data-prd-id");
  addToCart(prd_id);
}

function addToCart(prd_id) {
  $.ajax({
    url: "cart/add",
    method: "POST",
    data: {
      prd_id: prd_id,
      qty_item: 1,
    },
    success: function (response) {
      if (response.status === "success") {
        console.log("Item berhasil ditambahkan ke cart:", response);
        $("#successAddCart").addClass("flex");
        $("#successAddCart").removeClass("hidden");

        setTimeout(function () {
          $("#successAddCart").addClass("hidden");
          $("#successAddCart").removeClass("flex");
        }, 1500);
      } else {
        console.error("Error menambahkan item ke cart:", response.message);
        $("#failedAddCart").addClass("flex");
        $("#failedAddCart").removeClass("hidden");

        setTimeout(function () {
          $("#failedAddCart").addClass("hidden");
          $("#failedAddCart").removeClass("flex");
        }, 1500);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Error menambahkan item ke cart:", textStatus, errorThrown);
      $("#failedAddCart").addClass("flex");
      $("#failedAddCart").removeClass("hidden");

      setTimeout(function () {
        $("#failedAddCart").addClass("hidden");
        $("#failedAddCart").removeClass("flex");
      }, 1500);
    },
  });
}
