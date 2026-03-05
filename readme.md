# 🏢 PHP JobFinder - Filter Logic Exercise

Un portale di ricerca lavoro sviluppato in **PHP nativo** che simula la logica di filtraggio server-side. Il progetto mette in pratica la gestione delle superglobali e la manipolazione di array multidimensionali, con un focus particolare sulla **User Experience** e la **persistenza dei dati**.

## 🚀 Funzionalità principali

- **Filtro RAL**: Visualizzazione dinamica dei lavori basata sulla soglia minima di stipendio inserita.
- **Filtro Esperienza**: Classificazione logica tra profili Junior (<3 anni) e Senior (3+ anni) tramite una `select` persistente.
- **Filtro Smart Working**: Toggle dinamico (form-switch) per filtrare esclusivamente le posizioni in remoto.
- **Reset Intelligente**: Sistema di pulizia dei filtri tramite navigazione a URL pulito (index.php), che ripristina lo stato iniziale dell'applicazione.

## 🛠️ Tech Stack

- **Backend:** PHP 8.x (Logic, Superglobals `$_GET`, Array filtering)
- **Frontend:** HTML5, CSS3, Bootstrap 5.3 (UI Components, Utility classes)
- **Icons:** Bootstrap Icons

## 🧠 Cosa ho approfondito in questo esercizio

Durante lo sviluppo ho applicato concetti fondamentali del paradigma server-side:

1.  **Logica dei "Cancelli"**: Utilizzo del comando `continue` all'interno dei cicli per ottimizzare il filtraggio ed evitare nesting eccessivo di `if`.
2.  **Data Casting**: Conversione dei dati provenienti dal form (stringhe) in interi per confronti numerici sicuri.
3.  **Form Persistence**: Implementazione della logica PHP per mantenere gli stati `selected`, `checked` e `value` degli input dopo l'invio del form, garantendo una UX fluida e professionale.

## ⚙️ Come visualizzare il progetto

1. Clona la repository.
2. Assicurati di avere un server locale attivo (XAMPP, MAMP, o il server integrato di PHP).
3. Apri il terminale nella cartella del progetto e digita:
   ```bash
   php -S localhost:8000
   ```
