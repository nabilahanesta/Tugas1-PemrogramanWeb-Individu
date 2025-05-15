const showBtn = document.getElementById("showPopupBtn");
const closeBtn = document.getElementById("closeBtn");
const popup = document.getElementById("popup");
const overlay = document.getElementById("overlay");
const message = document.getElementById("popupMessage");

showBtn.onclick = () => {
  const input = document.getElementById("userInput").value;
  message.textContent = input || "Tidak ada pesan.";
  popup.style.display = "block";
  overlay.style.display = "block";
};

closeBtn.onclick = () => {
  popup.style.display = "none";
  overlay.style.display = "none";
};
