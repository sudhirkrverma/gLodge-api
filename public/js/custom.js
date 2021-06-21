
    function getRoom(room_type){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
      
        var room_type=room_type;
        
        alert(room_type);
        console.log(room_type);
        $.ajax({
            url: '/admin/masterData/room/getRoom',
            type: 'POST',
            data: { room_type : room_type},
            dataType: 'json',
        
            success: function( data ) {
                alert(data);
                console.log('Output');
                console.log(data);
                $('#room_no').html(data);
        
            },
            error: function (data) {
                console.log('Error:', data);
               }       
        })

    }
    
