subject: {cfg:site_name}: File(s) no longer available for download

{alternative:plain}

Dear Sir or Madam,

The file shipment n°{transfer.id} has been deleted from {cfg:site_name} by the sender ({transfer.user_email}) and is no longer available for download.

Best regards,
{cfg:site_name}

{alternative:html}

<p>
    Dear Sir or Madam,
</p>

<p>
    The file shipment n°{transfer.id} has been deleted from <a href="{cfg:site_url}">{cfg:site_name}</a> by the sender (<a href="mailto:{transfer.user_email}">{transfer.user_email}</a>) and is no longer available for download.
</p>

<p>
    Best regards,<br />
    {cfg:site_name}
</p>
