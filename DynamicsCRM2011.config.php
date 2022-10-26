<?php
/* Basic configuation details */

/*echo date('Y-m-d H:i:s')."BEGIN: DynamicsCRM2011.config file... \r\n"; */

// Discovery Service URI -> Get this from the Customizations / Developer Resources section of the Microsoft Dynamics CRM 2011 application
//$discoveryServiceURI = 'https://<your.domain.name>/XRMServices/2011/Discovery.svc';
//$discoveryServiceURI = 'https:/**************.crm5.dynamics.com/XRMServices/2011/Discovery.svc';
$discoveryServiceURI = 'https://disco.crm5.dynamics.com/XRMServices/2011/Discovery.svc';
// Organization Unique Name -> Get this from the Customizations / Developer Resources section of the Microsoft Dynamics CRM 2011 application
$organizationUniqueName = '*****************';
// Username & Password - Note that despite the text on the ADFS site, the Domain is NOT required!
$loginUsername = '***********';
$loginPassword = '***********';

/* Example data used in the Demos */
$demoCaseNumber = 'CAS-19932-G6X2H9';
$demoContactEmail = '***************';

/*echo date('Y-m-d H:i:s')."END: DynamicsCRM2011.config file... \r\n"; */

?>
