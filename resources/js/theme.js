document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const currentTheme = localStorage.getItem("theme") || "light";

    if (currentTheme === "dark") {
        document.body.classList.add("bg-zinc-900", "text-white");
        document.body.classList.remove("bg-yellow-50", "text-black");
    }

    themeToggle.addEventListener("click", function () {
        document.body.classList.toggle("bg-zinc-900");
        document.body.classList.toggle("text-white");
        document.body.classList.toggle("bg-yellow-50");
        document.body.classList.toggle("text-black");

        const theme = document.body.classList.contains("bg-zinc-900")
            ? "dark"
            : "light";
        localStorage.setItem("theme", theme);
    });
});
