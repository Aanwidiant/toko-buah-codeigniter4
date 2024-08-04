// Sidebar Admin
const sideBtn = document.querySelector("#sideBtn");
const sideBar = document.querySelector("#logo-sidebar");

sideBtn.addEventListener("click", function () {
  sideBar.classList.toggle("-translate-x-full");
});

// Control modal box update user and product
$(document).ready(function () {
  const viewUpdate = $("#viewUpdate");
  const editBtns = $(".editBtn");

  editBtns.each(function () {
    $(this).on("click", function () {
      viewUpdate.removeClass("hidden").addClass("flex");
    });
  });
});

$("#closeUpdate").on("click", function () {
  $(this).closest("#viewUpdate").removeClass("flex").addClass("hidden");
});

// Update Data User
function editUser(user_id) {
  $.ajax({
    url: "user/update/" + user_id,
    method: "GET",
    success: function (data) {
      $("#user_id").val(data.user_id);
      $("#username").val(data.username);
      $("#nama_lengkap").val(data.nama_lengkap);
      $("#email").val(data.email);
      $("#role").val(data.lv_id);
    },
  });
}

// Save Update User
$(document).ready(function () {
  $("#userUpdateForm").on("submit", function (e) {
    e.preventDefault();
    const user_id = $("#user_id").val();
    const role = $("#role").val();

    $.ajax({
      url: "user/update/save",
      method: "POST",
      data: {
        user_id: user_id,
        role: role,
      },
      success: function (response) {
        console.log("Data berhasil disimpan:", response);

        $.ajax({
          url: "user/refresh/" + user_id,
          method: "GET",
          success: function (data) {
            $(`#user-${user_id} .role`).text(data.lv_id === "lv_01" ? "User" : "Admin");
            $(`#user-${user_id} .updated_at`).text(data.updated_at);
          },
        });

        $("#successUpdate").addClass("flex");
        $("#successUpdate").removeClass("hidden");

        $("#viewUpdate").addClass("hidden");
        $("#viewUpdate").removeClass("flex");

        setTimeout(function () {
          $("#successUpdate").addClass("hidden");
          $("#successUpdate").removeClass("flex");
        }, 1500);
      },

      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error:", textStatus, errorThrown);

        $("#failedUpdate").addClass("flex");
        $("#failedUpdate").removeClass("hidden");

        setTimeout(function () {
          $("#failedUpdate").addClass("hidden");
          $("#failedUpdate").removeClass("flex");
        }, 1500);
      },
    });
  });
});

// Delete Data User
let userIdToDelete = null;

function confirmDelete(user_id) {
  userIdToDelete = user_id;
  $("#deleteAlert").removeClass("hidden");
  $("#deleteAlert").addClass("flex");
}

$(document).ready(function () {
  $("#noBtn").on("click", function () {
    $("#deleteAlert").addClass("hidden");
    $("#deleteAlert").removeClass("flex");
  });

  $("#confirmDeleteBtn").on("click", function () {
    if (userIdToDelete) {
      $.ajax({
        url: "user/delete" + userIdToDelete,
        method: "POST",
        success: function (response) {
          console.log("Data berhasil dihapus:", response);
          $(`#user-${userIdToDelete}`).remove();
          $("#successDelete").addClass("flex");
          $("#successDelete").removeClass("hidden");

          $("#deleteAlert").addClass("hidden");
          $("#deleteAlert").removeClass("flex");

          setTimeout(function () {
            $("#successDelete").addClass("hidden");
            $("#successDelete").removeClass("flex");
          }, 1500);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
          $("#failedDelete").addClass("flex");
          $("#failedDelete").removeClass("hidden");

          setTimeout(function () {
            $("#failedDelete").addClass("hidden");
            $("#failedDelete").removeClass("flex");
          }, 1500);
        },
      });
    }
  });
});

// Create Data Product
$("#btnCreate").on("click", function () {
  $("#viewCreate").removeClass("hidden").addClass("flex");
});

$("#closeCreate").on("click", function () {
  $(this).closest("#viewCreate").removeClass("flex").addClass("hidden");
});

$(document).ready(function () {
  $("#productCreateForm").on("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
      url: "product/create",
      method: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log("Product created successfully:", response);
        $("#successCreate").addClass("flex");
        $("#successCreate").removeClass("hidden");

        $("#viewCreate").addClass("hidden");
        $("#viewCreate").removeClass("flex");

        setTimeout(function () {
          $("#successCreate").addClass("hidden");
          $("#successCreate").removeClass("flex");

          setTimeout(function () {
            location.reload();
          }, 5);
        }, 1500);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error creating product:", textStatus, errorThrown);
        $("#failedCreate").addClass("flex");
        $("#failedCreate").removeClass("hidden");

        setTimeout(function () {
          $("#failedCreate").addClass("hidden");
          $("#failedCreate").removeClass("flex");
        }, 1500);
      },
    });
  });
});

// Update Data Product
function editProduct(prd_id) {
  $.ajax({
    url: "product/update" + prd_id,
    method: "GET",
    success: function (data) {
      $("#u_prd_id").val(data.prd_id);
      $("#u_nama_produk").val(data.nama_produk);
      $("#u_produk_img").attr("src", baseUrl + data.produk_img);
      $("#u_deskripsi").val(data.deskripsi);
      $("#u_harga").val(data.harga);
      $("#u_qty").val(data.qty);
      $("#u_stok").val(data.stok);
    },
  });
}

// Save Update Product
$(document).ready(function () {
  $("#productUpdateForm").on("submit", function (e) {
    e.preventDefault();
    const prd_id = $("#u_prd_id").val();
    const nama_produk = $("#u_nama_produk").val();
    const deskripsi = $("#u_deskripsi").val();
    const harga = $("#u_harga").val();
    const qty = $("#u_qty").val();
    const stok = $("#u_stok").val();
    const produk_img = $("#u_produk_img_path")[0].files[0];
    const old_img = $("#u_produk_img").attr("src").split("/").pop();

    const formData = new FormData();
    formData.append("prd_id", prd_id);
    formData.append("nama_produk", nama_produk);
    formData.append("deskripsi", deskripsi);
    formData.append("harga", harga);
    formData.append("qty", qty);
    formData.append("stok", stok);
    formData.append("old_img", old_img);

    if (produk_img) {
      formData.append("produk_img", produk_img);
    }

    $.ajax({
      url: "product/update/save",
      method: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log("Data berhasil disimpan:", response);
        $.ajax({
          url: "product/refresh" + prd_id,
          method: "GET",
          success: function (data) {
            $(`#product-${prd_id} .nama_produk`).text(data.nama_produk);
            $(`#product-${prd_id} .produk_img`).attr("src", baseUrl + data.produk_img);
            $(`#product-${prd_id} .deskripsi`).text(data.deskripsi);
            $(`#product-${prd_id} .harga`).text(data.harga);
            $(`#product-${prd_id} .qty`).text(data.qty);
            $(`#product-${prd_id} .stok`).text(data.stok);
            $(`#product-${prd_id} .updated_at`).text(data.updated_at);
          },
        });

        $("#successUpdate").addClass("flex");
        $("#successUpdate").removeClass("hidden");

        $("#viewUpdate").addClass("hidden");
        $("#viewUpdate").removeClass("flex");

        setTimeout(function () {
          $("#successUpdate").addClass("hidden");
          $("#successUpdate").removeClass("flex");
        }, 1500);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error:", textStatus, errorThrown);

        $("#failedUpdate").addClass("flex");
        $("#failedUpdate").removeClass("hidden");

        setTimeout(function () {
          $("#failedUpdate").addClass("hidden");
          $("#failedUpdate").removeClass("flex");
        }, 1500);
      },
    });
  });
});

// Delete Data Product
let productIdToDelete = null;
let produkImgPath = null;

function confirmDeleteProduct(prd_id, produk_img) {
  productIdToDelete = prd_id;
  path = produk_img;
  $("#deleteAlert").removeClass("hidden");
  $("#deleteAlert").addClass("flex");
}

$(document).ready(function () {
  $("#noBtn").on("click", function () {
    $("#deleteAlert").addClass("hidden");
    $("#deleteAlert").removeClass("flex");
  });

  $("#confirmDeleteBtn").on("click", function () {
    if (productIdToDelete) {
      $.ajax({
        url: "product/delete" + productIdToDelete,
        method: "POST",
        data: { path: path },
        success: function (response) {
          console.log("Data berhasil dihapus:", response);
          $(`#product-${productIdToDelete}`).remove();
          $("#successDelete").addClass("flex");
          $("#successDelete").removeClass("hidden");

          $("#deleteAlert").addClass("hidden");
          $("#deleteAlert").removeClass("flex");

          setTimeout(function () {
            $("#successDelete").addClass("hidden");
            $("#successDelete").removeClass("flex");
          }, 1500);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
          $("#failedDelete").addClass("flex");
          $("#failedDelete").removeClass("hidden");

          setTimeout(function () {
            $("#failedDelete").addClass("hidden");
            $("#failedDelete").removeClass("flex");
          }, 1500);
        },
      });
    }
  });
});
