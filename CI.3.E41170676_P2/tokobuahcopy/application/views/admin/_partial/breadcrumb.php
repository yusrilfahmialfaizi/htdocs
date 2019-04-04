<!-- Breadcrumbs-->
        <ol class="breadcrumb">

        	<?php foreach ($this->uri->segments as $segment ):?>
        		<?php 
        			$url = substr($this->uri->uri_string,0, strpos($this->uri->uri_string, $segment)) . $segment;
        			$is_active = $url == $this->uri->uri_string;
        		 ?>
          <!-- <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li> -->
          <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
            <!-- <a href="#">Dashboard</a> -->
            <?php if ($is_active):?>
            	<?php echo ucfirst($segment); ?>
        	<?php else: ?>
        		<a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
        	<?php endif; ?>
          </li>
          <!-- <li class="breadcrumb-item active">Overview</li> -->
      <?php endforeach; ?>
        </ol>