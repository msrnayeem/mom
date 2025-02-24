//chat.js
const courseId = window.course_id;
// Listen for new messages
window.Echo.private(`course.${courseId}`)
    .listen('.new-message', (e) => {

        getStudentFiles(courseId);
    });


