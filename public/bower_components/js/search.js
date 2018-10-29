function searchData()
{
    let keyword = $('#keyword').val().trim();
    window.location.href = "{{ route('category') }}" + "?keyword="+keyword;
}
 function deleteCate(id)
    {
        $.ajax({
            url: "/{{ route('categorydelete', id) }}",
            type: "POST",
            dataType: "JSON",
            data: {id: id},
            success: function(success) {
                success =$.trim(success);
                if (success === 'OK') {
                    toastr('Xóa thành công');
                    window.location.reload(true);
                } else {
                    toastr('Có lỗi xảy ra');
                }
            }
        });
    }
