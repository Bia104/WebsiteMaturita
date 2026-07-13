# Website Maturità

Local backup and development copy of a website previously hosted on [Altervista](https://www.altervista.org/), mirrored via FTP and kept here for archival purposes and offline/local development after the hosting account was closed.

## Requirements

- [PHP](https://windows.php.net/download/) (Non Thread Safe build)

## Running locally
 
The site is plain HTML/CSS/PHP with no database, so it can be served with PHP's built-in development server.
 
**Option 1 — run `start-server.ps1`**
```powershell
cd path\to\this\folder
.\start-server.ps1
```
Starts the server and opens the site in your default browser automatically.
(If you get an execution policy error, run once: `Set-ExecutionPolicy -Scope CurrentUser RemoteSigned`)
 
**Option 2 — plain PHP command**
```powershell
cd path\to\this\folder
php -S localhost:8000
```
Then open [http://localhost:8000](http://localhost:8000) in your browser.
 
## Notes

- Original site was served from `https://cerinobianca.altervista.org` (Altervista subdomain). 
- Site files mirrored from Altervista via FTP (`lftp`) on 2026-07-10.
