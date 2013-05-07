<?php
// /_includes/layout/menu-sub.inc.php
// 
// Domain Manager - A web-based application written in PHP & MySQL used to manage a collection of domain names.
// Copyright (C) 2010 Greg Chetcuti
// 
// Domain Manager is free software; you can redistribute it and/or modify it under the terms of the GNU General
// Public License as published by the Free Software Foundation; either version 2 of the License, or (at your
// option) any later version.
// 
// Domain Manager is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
// implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
// for more details.
// 
// You should have received a copy of the GNU General Public License along with Domain Manager. If not, please 
// see http://www.gnu.org/licenses/
?>
<br><br>
<?php 
if ($software_section == "domains") { ?>

	&raquo;&nbsp;<strong>Domains</strong>&nbsp; <?php
	if ($_SESSION['need_registrar'] != "1" && $_SESSION['need_registrar_account'] != "1") { ?>
    	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/add/domain.php">Add A New Domain</a>&nbsp;<?php 
	} 

} elseif ($software_section == "domain-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/domains.php">Domains</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Domain</strong>&nbsp;<?php 

} elseif ($software_section == "domain-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/domains.php">Domains</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Domain</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-certs") { ?>
	
	&raquo;&nbsp;<strong>SSL Certificates</strong>&nbsp;<?php
	if ($_SESSION['need_ssl_provider'] != "1" && $_SESSION['need_ssl_account'] != "1" && $_SESSION['need_domain'] != "1") { ?>
		&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/add/ssl-cert.php">Add A New SSL Certificate</a>&nbsp;<?php 
	}

} elseif ($software_section == "ssl-cert-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/ssl-certs.php">SSL Certificates</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New SSL Certificate</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-cert-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/ssl-certs.php">SSL Certificates</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An SSL Certificate</strong>&nbsp;<?php 

} elseif ($software_section == "segments") { ?>

	&raquo;&nbsp;<strong>Segments</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/add/segment.php">Add A New Segment</a>&nbsp;<?php 

} elseif ($software_section == "segment-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/segments.php">Segments</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Segment</strong>&nbsp;<?php 

} elseif ($software_section == "segment-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/segments.php">Segments</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Segment</strong>&nbsp;<?php 

} elseif ($software_section == "bulk-actions") {

	if ($action == "") { ?>

		&raquo;&nbsp;<strong>Bulk Actions</strong>&nbsp;<?php
        
	} else { ?>

		&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/bulk-actions.php">Bulk Actions</a>&nbsp;<?php

		if ($action == "AD") { ?>
			&raquo;&nbsp;<strong>Add Domains</strong>&nbsp;<?php
		} elseif ($action == "FR") { ?>
			&raquo;&nbsp;<strong>Renew Domains (Update Expiry Date, Mark Active, Add Note)</strong>&nbsp;<?php
		} elseif ($action == "R") { ?>
			&raquo;&nbsp;<strong>Renew Domains (Update Expiry Date Only)</strong>&nbsp;<?php
		} elseif ($action == "A") { ?>
			&raquo;&nbsp;<strong>Mark as 'Active'</strong>&nbsp;<?php
		} elseif ($action == "T") { ?>
			&raquo;&nbsp;<strong>Mark as 'In Transfer'</strong>&nbsp;<?php
		} elseif ($action == "PRg") { ?>
			&raquo;&nbsp;<strong>Mark as 'Pending (Registration)'</strong>&nbsp;<?php
		} elseif ($action == "PRn") { ?>
			&raquo;&nbsp;<strong>Mark as 'Pending (Renewal)'</strong>&nbsp;<?php
		} elseif ($action == "PO") { ?>
			&raquo;&nbsp;<strong>Mark as 'Pending (Other)'</strong>&nbsp;<?php
		} elseif ($action == "E") { ?>
			&raquo;&nbsp;<strong>Mark as 'Expired'</strong>&nbsp;<?php
		} elseif ($action == "S") { ?>
			&raquo;&nbsp;<strong>Mark as 'Sold'</strong>&nbsp;<?php
		} elseif ($action == "PRVE") { ?>
			&raquo;&nbsp;<strong>Mark as Private WHOIS</strong>&nbsp;<?php
		} elseif ($action == "PRVD") { ?>
			&raquo;&nbsp;<strong>Mark as Public WHOIS</strong>&nbsp;<?php
		} elseif ($action == "CPC") { ?>
			&raquo;&nbsp;<strong>Change Category</strong>&nbsp;<?php
		} elseif ($action == "CDNS") { ?>
			&raquo;&nbsp;<strong>Change DNS Profile</strong>&nbsp;<?php
		} elseif ($action == "CED") { ?>
			&raquo;&nbsp;<strong>Change Expiry Date</strong>&nbsp;<?php
		} elseif ($action == "CIP") { ?>
			&raquo;&nbsp;<strong>Change IP Address</strong>&nbsp;<?php
		} elseif ($action == "CRA") { ?>
			&raquo;&nbsp;<strong>Change Registrar Account</strong>&nbsp;<?php
		} elseif ($action == "CWH") { ?>
			&raquo;&nbsp;<strong>Change Web Hosting Provider</strong>&nbsp;<?php
		} elseif ($action == "AN") { ?>
			&raquo;&nbsp;<strong>Add A Note</strong>&nbsp;<?php
		}

	}

} elseif ($software_section == "assets") { ?>

	&raquo;&nbsp;<strong>Assets</strong>&nbsp;<?php 

} elseif ($software_section == "reporting") { ?>

	&raquo;&nbsp;<strong>Run Reports</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-cost-by-category-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Cost by Category Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-cost-by-month-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Cost by Month Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-cost-by-owner-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Cost by Owner Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-cost-by-registrar-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Cost by Registrar Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-cost-by-tld-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Cost by TLD Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-registrar-fee-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Registrar Fee Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-domain-renewal-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Renewal Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-cost-by-category-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Cost by Category Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-cost-by-month-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Cost by Month Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-cost-by-owner-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Cost by Owner Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-cost-by-provider-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Cost by Provider Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-cost-by-type-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Cost by Type Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-provider-fee-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Provider Fee Report</strong>&nbsp;<?php

} elseif ($software_section == "reporting-ssl-renewal-report") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/reporting/">Run Reports</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Certificate Renewal Report</strong>&nbsp;<?php

} elseif ($software_section == "registrars") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Registrars</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/registrar.php">Add A New Registrar</a>&nbsp;<?php 

} elseif ($software_section == "registrars-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrars.php">Domain Registrars</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Registrar</strong>&nbsp;<?php 

} elseif ($software_section == "registrars-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrars.php">Domain Registrars</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Registrar</strong>&nbsp;<?php 

} elseif ($software_section == "registrar-fees") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrars.php">Domain Registrars</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/edit/registrar.php?rid=<?=$rid?>">Editing A Registrar</a>&nbsp;
	&raquo;&nbsp;<strong>Registrar Fees</strong>&nbsp;<?php 

} elseif ($software_section == "registrar-fees-missing") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrars.php">Domain Registrars</a>&nbsp;
	&raquo;&nbsp;<strong>Missing Domain Registrar Fees</strong>&nbsp;<?php 

} elseif ($software_section == "registrar-accounts") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>Domain Registrar Accounts</strong>&nbsp;<?php
	if ($_SESSION['need_registrar'] != "1") { ?>
		&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/registrar-account.php">Add A New Registrar Account</a>&nbsp;<?php 
	}

} elseif ($software_section == "registrar-accounts-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrar-accounts.php">Domain Registrar Accounts</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Registrar Account</strong>&nbsp;<?php 

} elseif ($software_section == "registrar-accounts-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/registrar-accounts.php">Domain Registrar Accounts</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Registrar Account</strong>&nbsp;<?php 

} elseif ($software_section == "dns") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>DNS Profiles</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/dns.php">Add A New DNS Profile</a>&nbsp;<?php 

} elseif ($software_section == "dns-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/dns.php">DNS Profiles</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New DNS Profile</strong>&nbsp;<?php 

} elseif ($software_section == "dns-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/dns.php">DNS Profiles</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A DNS Profile</strong>&nbsp;<?php 

} elseif ($software_section == "ip-addresses") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>IP Addresses</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/ip-address.php">Add A New IP Address</a>&nbsp;<?php 

} elseif ($software_section == "ip-addresses-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ip-addresses.php">IP Addresses</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New IP Address</strong>&nbsp;<?php 

} elseif ($software_section == "ip-addresses-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ip-addresses.php">IP Addresses</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An IP Address</strong>&nbsp;<?php 

} elseif ($software_section == "hosting") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>Web Hosting Providers</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/host.php">Add A New Web Host</a>&nbsp;<?php 

} elseif ($software_section == "hosting-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/hosting.php">Web Hosting Providers</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Web Host</strong>&nbsp;<?php 

} elseif ($software_section == "hosting-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/hosting.php">Web Hosting Providers</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Web Host</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-providers") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Providers</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/ssl-provider.php">Add A New SSL Provider</a>&nbsp;<?php 

} elseif ($software_section == "ssl-providers-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-providers.php">SSL Providers</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New SSL Provider</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-providers-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-providers.php">SSL Providers</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An SSL Provider</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-provider-fees") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-providers.php">SSL Providers</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/edit/ssl-provider.php?sslpid=<?=$sslpid?>">Editing An SSL Provider</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Provider Fees</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-provider-fees-missing") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-providers.php">SSL Providers</a>&nbsp;
	&raquo;&nbsp;<strong>Missing SSL Provider Fees</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-provider-accounts") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Provider Accounts</strong>&nbsp;<?php
	if ($_SESSION['need_ssl_provider'] != "1") { ?>
		&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/ssl-provider-account.php">Add A New SSL Provider Account</a>&nbsp;<?php 
	}

} elseif ($software_section == "ssl-provider-accounts-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-accounts.php">SSL Provider Accounts</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New SSL Provider Account</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-provider-accounts-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-accounts.php">SSL Provider Accounts</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An SSL Provider Account</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-types") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>SSL Types</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/ssl-type.php">Add A New SSL Type</a>&nbsp;<?php 

} elseif ($software_section == "ssl-types-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-types.php">SSL Types</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New SSL Type</strong>&nbsp;<?php 

} elseif ($software_section == "ssl-types-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/ssl-types.php">SSL Types</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An SSL Type</strong>&nbsp;<?php 

} elseif ($software_section == "categories") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>Categories</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/category.php">Add A New Category</a>&nbsp;<?php 

} elseif ($software_section == "categories-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/categories.php">Categories</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Category</strong>&nbsp;<?php 

} elseif ($software_section == "categories-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/categories.php">Categories</a>&nbsp;
	&raquo;&nbsp;<strong>Editing A Category</strong>&nbsp;<?php 

} elseif ($software_section == "account-owners") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<strong>Account Owners</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/add/account-owner.php">Add A New Account Owner</a>&nbsp;<?php 

} elseif ($software_section == "account-owners-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/account-owners.php">Account Owners</a>&nbsp;
	&raquo;&nbsp;<strong>Adding A New Account Owner</strong>&nbsp;<?php 

} elseif ($software_section == "account-owners-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/index.php">Assets</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/assets/account-owners.php">Account Owners</a>&nbsp;
	&raquo;&nbsp;<strong>Editing An Account Owner</strong>&nbsp;<?php 

} elseif ($software_section == "system") { ?>

	&raquo;&nbsp;<strong>Control Panel</string>&nbsp;<?php

} elseif ($software_section == "system-display-settings") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<strong>Display Settings</string>&nbsp;<?php

} elseif ($software_section == "system-email-settings") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<strong>Email Settings</string>&nbsp;<?php

} elseif ($software_section == "system-user-defaults") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<strong>User Defaults</string>&nbsp;<?php

} elseif ($software_section == "system-update-profile") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<strong>Update Profile</string>&nbsp;<?php

} elseif ($software_section == "system-change-password") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<strong>Change Password</string>&nbsp;<?php

} elseif ($software_section == "admin-system-settings") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<strong>System Settings</string>&nbsp;<?php

} elseif ($software_section == "admin-system-defaults") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<strong>System Defaults</string>&nbsp;<?php

} elseif ($software_section == "admin-system-info") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<strong>System Information</string>&nbsp;<?php

} elseif ($software_section == "admin-user-list") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<strong>Users</strong>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/admin/add/user.php">Add A New User</a>&nbsp;<?php 

} elseif ($software_section == "admin-user-add") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/admin/users.php">Users</a>&nbsp;
	&raquo;&nbsp;Adding A New User&nbsp;<?php 

} elseif ($software_section == "admin-user-edit") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/">Control Panel</a>&nbsp;
	&raquo;&nbsp;<font class="default_highlight">SYS ADMIN</font>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/system/admin/users.php">Users</a>&nbsp;
	&raquo;&nbsp;Editing A User&nbsp;<?php 

} elseif ($software_section == "updates") {
	
	if ($id == "") { ?>

		&raquo;&nbsp;<strong><?=$software_title?> Updates</string>&nbsp;<?php
		
	} else { ?>

		&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/updates.php"><?=$software_title?> Updates</a>&nbsp;
		&raquo;&nbsp;<strong>Viewing An Update</string>&nbsp;<?php
		
	}

} elseif ($software_section == "help") { ?>

	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/help/">Main</a>&nbsp;
	&raquo;&nbsp;<a href="<?php if ($web_root != "/") echo $web_root; ?>/help/getting-started/">Getting Started</a>&nbsp;<?php

} ?>