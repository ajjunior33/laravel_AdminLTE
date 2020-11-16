function check(data) {
    let empty = [];
    data.forEach(element => {
        if (!element.value) {
            empty.push(element.name);
        }
    });
    if (empty.length > 0) {
        return Swal.fire(
            "keep me Calm",
            `Os campos ${empty} estão vazios.`,
            "error"
        );
    }
    return true;
}
function resetform(form) {
    $(`#${form}`).each(function() {
        this.reset();
    });
}
