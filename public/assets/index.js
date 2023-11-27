var popup = document.getElementById("popup");
var form = document.querySelector("#form-main");
var nameInput = form.querySelector('[name="name"]');
var phone = form.querySelector('[name="phone"]');
var email = form.querySelector('[name="email"]');
var radioSelected = document.querySelector(
     'input[name="radioSelected"]:checked'
);
const radioButtons = document.querySelectorAll('input[name="radioSelected"]');
var selectOption = form.querySelector("#country");
var industries = form.querySelector("#industries");
var fileInput = form.querySelector('[name="attachment"]');
var textarea = document.getElementById("customTextarea");

function toggleTextarea(radioButton) {
     if (radioButton.value === "other") {
          textarea.removeAttribute("disabled");
     } else {
          textarea.setAttribute("disabled", "disabled");
     }
}

radioButtons.forEach((radioButton) => {
     radioButton.addEventListener("change", function () {
          // Enable/disable textarea based on the selected radio button
          toggleTextarea(this);
     });
});

// Thêm sự kiện input cho các trường input để ẩn cảnh báo khi người dùng bắt đầu nhập
document.querySelectorAll(".form-main input").forEach(function (input) {
     input.addEventListener("input", function () {
          // Nếu giá trị của trường input không rỗng, ẩn cảnh báo
          if (this.value.trim() !== "") {
               this.style.border = "1px solid #ced4da";
          }
     });
});
document.querySelectorAll("select").forEach(function (input) {
     input.addEventListener("input", function () {
          // Nếu giá trị của trường input không rỗng, ẩn cảnh báo
          if (this.value.trim() !== "") {
               this.style.border = "1px solid #ced4da";
          }
     });
});


document.getElementById("fileInput").addEventListener("change", function () {
     var fileInput = document.getElementById("fileInput");
     var fileChosen = document.getElementById("fileChosen");
     var fileWarning = document.getElementById("fileWarning");
     var loadingIndicator = document.getElementById("loadingIndicator");
     var cancelUpload = document.getElementById("cancelUpload");

     if (fileInput.files.length < 2) {
          // Nếu số lượng file chọn không đủ, hiển thị cảnh báo
          fileWarning.style.display = "block";
          fileChosen.textContent = "No file selected";
     } else {
          // Ẩn cảnh báo và hiển thị thông tin file
          fileWarning.style.display = "none";
          fileChosen.textContent = `${fileInput.files.length} files selected`;

          // Hiển thị loading indicator và cancel button
          loadingIndicator.style.display = "inline-block";
          cancelUpload.style.display = "inline-block";

          // Tự động ẩn loading indicator sau 2 giây
          setTimeout(function () {
               loadingIndicator.style.display = "none";
          }, 2000);
     }
});

// Xử lý sự kiện khi người dùng click vào nút hủy bỏ file đã chọn
document.getElementById("cancelUpload").addEventListener("click", function () {
     var fileInput = document.getElementById("fileInput");
     var fileChosen = document.getElementById("fileChosen");
     var fileWarning = document.getElementById("fileWarning");
     var loadingIndicator = document.getElementById("loadingIndicator");

     // Reset input file và ẩn cảnh báo
     fileInput.value = "";
     fileWarning.style.display = "none";
     fileChosen.textContent = "No file selected";

     // Ẩn loading indicator và cancel button
     loadingIndicator.style.display = "none";
     this.style.display = "none";
});


