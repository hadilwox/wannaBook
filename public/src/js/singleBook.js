// const $ = document;
const commentBtn = $.getElementById("commentBtn");
const commentModal = $.getElementById("commentModal");
const shreBtn = $.getElementById("shareBtn");
const closeShareModal = $.getElementById("closeShareModal");
const shareModal = $.getElementById("shareModal");

const copyBtn = $.getElementById("copyBtn");

shreBtn.addEventListener("click", function () {
    shareModal.classList.remove("hidden");
});

closeShareModal.addEventListener("click", function () {
    shareModal.classList.add("hidden");
});

const closeCommentModal = $.getElementById("closeCommentModal");
const openComment = () => {
    commentBtn.addEventListener("click", function () {
        commentModal.classList.remove("hidden");

        commentModal.classList.remove("translate-y-[30rem]");
    });
};
const closeComment = () => {
    closeCommentModal.addEventListener("click", function () {
        commentModal.classList.add("hidden");

        commentModal.classList.add("translate-y-[30rem]");
    });
};

copyBtn.addEventListener("click", function () {
    let copyText = document.getElementById("copytext");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
});

openComment();
closeComment();
