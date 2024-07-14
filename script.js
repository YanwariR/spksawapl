const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  home = body.querySelector(".home"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

console.log(
  "Initial sidebar classes:",
  sidebar.className,
  "Initial home classes:",
  home.className
);

function saveSidebarStatus() {
  localStorage.setItem(
    "sidebarStatus",
    sidebar.classList.contains("close") ? "close" : "open"
  );
  console.log(
    "Sidebar status saved:",
    sidebar.classList.contains("close") ? "close" : "open"
  );
}

function saveMode() {
  localStorage.setItem(
    "mode",
    body.classList.contains("dark") ? "dark" : "light"
  );
  console.log(
    "Mode saved:",
    body.classList.contains("dark") ? "dark" : "light"
  );
}

function restoreMode() {
  const mode = localStorage.getItem("mode");
  console.log("Restoring mode:", mode);

  if (mode === "dark") {
    body.classList.add("dark");
    modeText.innerText = "Dark Mode";
  } else {
    body.classList.remove("dark");
    modeText.innerText = "Day Mode";
  }
}

function restoreSidebarStatus() {
  const status = localStorage.getItem("sidebarStatus");
  console.log("Restoring sidebar status:", status);

  sidebar.classList.add("no-transition");
  home.classList.add("no-transition");
  console.log("Added no-transition class:", sidebar.className, home.className);

  if (status === "close") {
    sidebar.classList.add("close");
  } else {
    sidebar.classList.remove("close");
  }

  requestAnimationFrame(() => {
    console.log("Removing no-transition class");
    sidebar.classList.remove("no-transition");
    home.classList.remove("no-transition");
    console.log("Final classes:", sidebar.className, home.className);
  });
}

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  saveSidebarStatus();
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Dark Mode";
  } else {
    modeText.innerText = "Day Mode";
  }

  saveMode();
});

document.addEventListener("DOMContentLoaded", () => {
  restoreSidebarStatus();
  restoreMode();
});
