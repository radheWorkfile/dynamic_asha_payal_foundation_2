<style>
    .text-m{color:#0288d1;width:28%;}
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="display:flex;"><span class="text-m"><b class="text-col">Name : </b></span><span><?php if($doa_enq['first_name'].''.$doa_enq['last_name']){ echo $doa_enq['first_name'].''.$doa_enq['last_name'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Mobile : </b></span><span><?php if($doa_enq['mobile']){ echo $doa_enq['mobile'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Email : </b></span><span><?php if($doa_enq['email']){ echo $doa_enq['email'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Amount : </b></span><span><?php if($doa_enq['amount']){ echo $doa_enq['amount'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Address : </b></span><span><?php if($doa_enq['address']){ echo $doa_enq['address'];}else{echo "N/A";}?></span></p>
                <p style="display:flex;"><span class="text-m"><b>Date : </b></span><span><?php if($doa_enq['update_at']){ echo $doa_enq['update_at'];}else{echo "N/A";}?></span></p>
            </div>
        </div>
    </div>
</section>