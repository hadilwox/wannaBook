// const $ = document;
const commentBtn = $.getElementById("commentBtn");
const commentModal = $.getElementById("commentModal");
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

openComment();
closeComment();
