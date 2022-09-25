$( document ).ready(getData(1));

function updateTable(response){
    response = JSON.parse(response);
    data = response.data.data;
    meta = response.data.meta;
    let columns = {
        'full_name':'Name',
        'experience':'Experience',
        'skills':'Skills',
        'certification':'Certification',
        'resume' : 'Resume'
    };
    columns[$('#optional-column').find(":selected").val()] = $('#optional-column').find(":selected").text();
    var html = '<table class="table"><tbody><tr>';
    html += ('<td>Showing Results from '+meta.from+' to '+meta.to+' out of '+meta.total+'</td>');
    html += '<td style="text-align: right;">';
    if(meta.current_page != 1){
        html += ('<button class="btn btn.secondary" onclick="getData('+(meta.current_page - 1)+')">Prev</button>')
    }
    if(meta.current_page < meta.last_page){
        html += ('<button class="btn btn.secondary" onclick="getData('+(parseInt(meta.current_page) + 1)+')">Next</button>')
    }
    html += '</td></tr></tbody></table>'
    html += '<table class="table"><thead><tr><th scope="col">Sr.</th>';
    $.each(columns, (i, item) => {
        html += ('<th scope="col">'+item+'</th>');              
    });
    html += '<th scope="col">Profile</th></tr></thead><tbody>';
    $.each(data, (i, item) => {
        html += ('<tr><th scope="row">'+(meta.from + i)+'</th>');
        $.each(columns, (k, v) => {
            html += ('<td>'+item[k]+'</td>');              
        });  
        html += ('<td><a href="/profile/'+item['user_id']+'" target="_blank">profile</a></td></tr>');           
    });
    html += '</tbody></table>';
    $('#app').html(html);
}

function getData(page=1){
    $('#app').html('<p>loading data...</p>');
    var formData = new FormData();
    formData.append('page',page);
    if($('#search-value').val() != ''){
        formData.append($('#search-by').find(":selected").val(), $('#search-value').val());
    }
    if($('#experience-search').val() != ''){
        let exp = {
            operator : $('#experience-operator').find(":selected").val(),
            value: $('#experience-search').val()
        }
        formData.append('experience', JSON.stringify(exp));
    }
    let sort_by = {order:'asc',column:$('#sort-by').find(":selected").val()};
    if($("#sort-order").is(':checked')){
        sort_by.order = 'desc';
    }
    formData.append('sort_by', JSON.stringify(sort_by));

    $.ajax({
        type: "POST",
        data: formData,
        url: "/get-list",
        contentType: false,
        processData: false,
        success: function(data){
            updateTable(data);
        },
        error: function(data) {
            alert("Something went wrong");
        }
   });
}

$("#search").on("click", function(event) {
    event.preventDefault();
    getData();
});