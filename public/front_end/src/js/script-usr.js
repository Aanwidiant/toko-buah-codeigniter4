const sideBtn = document.querySelector("#sideBtn");
const sideBar = document.querySelector("#logo-sidebar");

sideBtn.addEventListener("click", function () {
  sideBar.classList.toggle("-translate-x-full");
});

function deleteCart(prd_id) {
  $.ajax({
    url: "cart/delete",
    method: "POST",
    data: {
      prd_id: prd_id,
    },
    success: function (response) {
      console.log("Item berhasil dihapus dari cart:", response);
      $("#cartItem-" + prd_id).remove();
      $("#successDeleteCart").addClass("flex");
      $("#successDeleteCart").removeClass("hidden");

      setTimeout(function () {
        $("#successDeleteCart").addClass("hidden");
        $("#successDeleteCart").removeClass("flex");
      }, 1500);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Error menghapus item dari cart:", textStatus, errorThrown);
      $("#failedDeleteCart").addClass("flex");
      $("#failedDeleteCart").removeClass("hidden");

      setTimeout(function () {
        $("#failedDeleteCart").addClass("hidden");
        $("#failedDeleteCart").removeClass("flex");
      }, 1500);
    },
  });
}

// CheckOut

$("#checkOutBtn").on("click", function () {
  $("#viewCheckOut").removeClass("hidden").addClass("flex");
});

$("#cancelBtn").on("click", function () {
  $(this).closest("#viewCheckOut").removeClass("flex").addClass("hidden");
});

$(document).ready(function () {
  $("#checkoutForm").on("submit", function (e) {
    e.preventDefault();

    let selectedProducts = [];
    $("input[type=checkbox]:checked").each(function () {
      selectedProducts.push($(this).val());
    });

    let formData = new FormData(this);
    formData.append("selectedProducts", JSON.stringify(selectedProducts));

    $.ajax({
      url: "checkout",
      method: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.status === "success") {
          alert("Pesanan berhasil dibuat");
          $("#checkoutModal").addClass("hidden");
          // Redirect atau update UI sesuai kebutuhan
        } else {
          alert("Gagal membuat pesanan");
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error:", textStatus, errorThrown);
      },
    });
  });
});
