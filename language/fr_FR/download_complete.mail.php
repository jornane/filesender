subject: {cfg:site_name}: Téléchargement terminé

{alternative:plain}

Madame, Monsieur,

Votre téléchargement {if:files>1}des fichiers{else}du fichier{endif} suivant{if:files>1}s{endif} est maintenant terminé :

{if:files>1}{each:files as file}
  - {file.name} ({size:file.size})
{endeach}{else}
{files.first().name} ({size:files.first().size})
{endif}

Cordialement,
{cfg:site_name}

{alternative:html}

<p>
    Madame, Monsieur,
</p>

<p>
    Votre téléchargement {if:files>1}des fichiers{else}du fichier{endif} suivant{if:files>1}s{endif} est maintenant terminé :
</p>

<p>
    {if:files>1}
    <ul>
        {each:files as file}
            <li>{file.name} ({size:file.size})</li>
        {endeach}
    </ul>
    {else}
    {files.first().name} ({size:files.first().size})
    {endif}
</p>

<p>
    Cordialement,<br />
    {cfg:site_name}
</p>
