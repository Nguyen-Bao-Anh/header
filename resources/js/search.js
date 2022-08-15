$("#btn-course-search").click(function() {
    let search = $('#search').val();
    location.href = '/course?search='+search
});
