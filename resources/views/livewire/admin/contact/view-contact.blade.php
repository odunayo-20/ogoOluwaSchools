
<!-- Main Content start -->
<div class="main-content">
  <!-- section start -->
  <section class="section">
    <div class="section-body">
      <!-- add content start here -->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>CONTACT</h4>
            </div>
            <div class="card-body">



<div class="row">


<div class="col-md-12 py-2 col-sm-12">
    <b> Name:</b>
   <span> 
    {{ $contact->name }} 
   </span>
    <hr>

</div>
<!-- <hr> -->
<div class="col-md-12 py-4">
    <b>Subject:</b>
    <br>
    <hr>
    {{ $contact->subject }} 
   
</div>
<hr>
<div class="col-md-12 py-4">
<b>Message:</b>
<hr>
<p>
    {{ $contact->message }}  
</p>
</div>

<div class="col-md-12 col-sm-12 py-4 text-end text-muted">
    <b>Date:</b>
    {{ $contact->created_at }} 

</div>

</div>    
            
            </div>

          </div>
        </div>
      </div>

      <!-- add content stop here-->
    </div>

  </section>
  <!-- section stop -->

</div>
<!-- Main content stop -->

