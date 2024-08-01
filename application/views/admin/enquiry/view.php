<style>
    .text-m{color:#0288d1;width:28%;}
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="display:flex;"><span class="text-m"><b class="text-col">Name : </b></span><span><?php if($enquiry['name']){ echo $enquiry['name'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Mobile : </b></span><span><?php if($enquiry['mobile']){ echo $enquiry['mobile'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Email : </b></span><span><?php if($enquiry['email']){ echo $enquiry['email'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Subject : </b></span><span><?php if($enquiry['subject']){ echo $enquiry['subject'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Message : </b></span><span><?php if($enquiry['message']){ echo $enquiry['message'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Address : </b></span><span><?php if($enquiry['address']){ echo $enquiry['address'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Date : </b></span><span><?php if($enquiry['updated_at']){ echo $enquiry['updated_at'];}else{echo "N/A";}?></span></p>
            </div>
        </div>
    </div>
</section>