<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    function startAnimation() {
        // Add the class 'animate' to the element to start the animation
        document.querySelector('.mid-text').classList.add('shake');

        // After a short delay, remove the 'animate' class to stop the animation
        setTimeout(function() {
            document.querySelector('.mid-text').classList.remove('shake');
        }, 500); // Adjust this value to match the duration of your animation
    }
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
        document.querySelector('.sidebar-overlay').classList.toggle('active');
        var sidebarOverlay = document.querySelector('.sidebar-overlay');
        sidebarOverlay.style.display = (sidebarOverlay.style.display === 'block') ? 'none' : 'block';


    });

    document.getElementById('sidebar-close-btn').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.remove('active');
        document.querySelector('.sidebar-overlay').classList.remove('active');
        var sidebarOverlay = document.querySelector('.sidebar-overlay');
        sidebarOverlay.style.display = (sidebarOverlay.style.display === 'block') ? 'none' : 'block';
    });
    var sidebarOverlay = document.getElementsByClassName("sidebar-overlay")[0];
    sidebarOverlay.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
        document.querySelector('.sidebar-overlay').classList.toggle('active');
        sidebarOverlay.style.display = (sidebarOverlay.style.display === 'block') ? 'none' : 'block';
    });





    function openTab(event, tabId) {
        var i, tabcontent, tablinks;

        // Hide all tab content
        tabcontent = document.getElementsByClassName("tab-pane");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            tabcontent[i].classList.remove("active");
        }

        // Remove active class from all tabs
        tablinks = document.getElementsByClassName("tab");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Show the current tab content and add an active class to the clicked tab
        document.getElementById(tabId).style.display = "block";
        document.getElementById(tabId).classList.add("active");
        event.currentTarget.classList.add("active");
    }

    // Initialize the first tab as active
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("tab")[0].click();
    });
    document.getElementById('input_search').addEventListener('input', function() {
        document.getElementById('absolute_text').style.display = this.value ? 'block' : 'none';
    })
    $("#input_search").on("input", function() {
        $.ajax({
            url: "<?php echo base_url("city") ?>",
            type: "post",
            dataType:"json",
            data: {
                cityname: $("#input_search").val(),
            },
            success: function(data) {
                $("#absolute_text").empty();
                $("#absolute_text").append("no result found");
                    
                // if (data =="error") {
                //     console.log("this is the error");
                //     $("#absolute_text").empty();
                //     $("#absolute_text").append("no result found");
                    

                // } else {
                  
                //     $("#absolute_text").empty();
                //     data.forEach(city => {
                      
                //         $("#absolute_text").append(`<li  id="${city.id}">${city.city}<li>`);
                //     });


                // }

            }




        })
    })
//this is for the form
document.getElementById('enquiryBtn').addEventListener('click', function() {
        document.getElementById('overlay').style.display = "flex";
    });

    // Close the form
    document.getElementById('closeBtn').addEventListener('click', function() {
        document.getElementById('overlay').style.display = "none";
    });

    // Close the form when clicking outside the form container
    document.getElementById('overlay').addEventListener('click', function(event) {
        if (event.target == this) {
            this.style.display = "none";
        }
    });
    $("#formdetail").on("submit", function(e) {
        e.preventDefault();
        var formdata = $("#formdetail").serialize();
        $.ajax({

            url: "<?php echo base_url("welcome/formdata") ?>",
            method: "post",
            dataType: 'json',
            data: formdata,
            success: function(data) {

                document.getElementById('overlay').style.display = "none";
                $("#formdetail")[0].reset();




                Swal.fire({
                    title: 'Success!',
                    text: 'Your data has been submitted successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                location.reload();

            }









        })


    })
    Date.prototype.toDateInputValue = (function() {
        var local = new Date(this);
        local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
        return local.toJSON().slice(0, 10);
    });

    $('#current_date').val(new Date().toDateInputValue());
    window.onload = function() {
    const now = new Date();
    console.log(now); // Check the current date and time
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';
    
    // Convert hours from 24-hour format to 12-hour format
    hours = hours % 12;
    hours = hours ? hours : 12; // The hour '0' should be '12'
    hours = String(hours).padStart(2, '0'); // Ensure hours are two digits
    
    console.log(`${hours}:${minutes} ${ampm}`); // Check the formatted time
    
    document.getElementById('current_time').value = `${hours}:${minutes} ${ampm}`;
};



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>