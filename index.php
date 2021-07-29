<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <title>EnergyyxDev - Status Page</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    

    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>EnergyyxDev Status Page</h2>
                        <h5>Welcome in this Status Page!</h5>
                    </section>
                    <section class="privacy-policy-section">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="privay-policy-card card">
                                    <div class="card-body">
                                        <div id="user-licence">
                                            <h5 class="policy-title">Status</h5>
                                            
                                            
                                            
                                            
                                            <?php
                                            
                                            $free_disk = disk_free_space("/");
                                            $total_disk = disk_total_space("/");
                                            $used_disk = $total_disk - $free_disk;
                                            $diskusage = "" . round($used_disk / $total_disk * 100) . "%";
                                            $ram_usage = memory_get_usage(true);
                                            $ram_total = $phpinfo['PHP Core']['memory_limit'];
                                            if ($ram_total) {
                                                $ramusage = "" . round($ram_usage / 1024 / 1024) . " / " . round($ram_total / 1024 / 1024) . " MB " . round($ram_usage / $ram_total * 100) . "%";
                                            } else {
                                                $ramusage = "" . round($ram_usage / 1024 / 1024, 1) . " MB";
                                            }
                                            $cpu = sys_getloadavg();
                                            $scpu = "" . json_encode($cpu);
                                            $variable = substr($scpu, 0, strpos($scpu, "."));
                                            $edit = explode("[", $variable, 2);
                                            $cpu_usage = $edit['1'];
                                            $cpuusage = "$cpu_usage". "%"; 
                                           
                                            
                                            function ping($Host, $port, $timeout) 
                                            { 
                                              $tB = microtime(true); 
                                              $fP = fSockOpen($Host, $port, $errno, $errstr, $timeout); 
                                              if (!$fP) { return "down"; } 
                                              $tA = microtime(true); 
                                              return round((($tA - $tB) * 1000), 0)." ms"; 
                                            }
                                            
                                            $ping = ping("www.google.com", 80, 10);
                                            
                                            ?>
                                            
                                            
                                            <p><?php echo "📶Ping» $ping"; ?><p>
                                            <p><?php echo "🗄Disk Usage » $diskusage"; ?><p>
                                            <p><?php echo "💾Ram Usage » $ramusage"; ?><p>
                                            <p><?php echo "🔋Cpu Usage » $cpuusage"; ?><p>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
            </div>
        </div>
        <footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <font size="5" color="black">DStat page to see all requests incoming</font>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                    <a href="/dstat" class="btn btn-danger btn-lg">DStat</a>
                </div>
            </div> 
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <font size="5" color="black">EnergyyxDev Copyright | All Rights reserved.</font>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                    <a href="https://github.com/Energyyx/StatusPage" class="btn btn-danger btn-lg">GitHub</a>
                </div>
            </div>
    </footer>
    </main>
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
