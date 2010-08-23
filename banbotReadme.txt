/*  UrtBanBot made by [2s2h]n3m3s1s & [2s2h]zamy
 *  ********************************************
 *
 *
 *
 *       Urban Terror clan "2Steps2Hell"
 *                 visit us
 *                    @
 *         www.x2s2hx.altervista.org
 */

This file is written in English and Italian :)


[ENG]

###  General description and notes ###
Banbot is a bot made in C++ that aims to be simple efficient and to use very few
resources of the hosting machine limiting ( even almost eliminating ) unwanted server "lags".
It controls the URBAN TERROR 4.1 game and uses a an SQLite3 database to keep it's data
( the SQLite3 library is integrated in the bot so you don't have to install it seperatly on the hosting
machine ).
It periodically controls the server for banned players and gets rid of them denying any future access.

Created to go on Unix/linux machines ( Windows servers not tested! )

Inide the directory "compiled" you'll find an already compiled version of the bot tha "should" run on most
linux servers ( for those who don't have to possibility to compile it directly on the server ).
We advise to compile the source code on you server when possible.

The actual version of the bot is still in beta version and so it's not that simple to use ( to delete a ban,
for example, you'll have to manually access the sqlite3 database and cancel the desired record ).


###   Requirements:   ###

Requirements for compilation:
~ Unix/linux os
~ g++ compiler
~ standard libraries

###  How to compile Banbot  ###

~ $cd <directory>
~ $make

If compilation succeeds, you'll find the Banbot executable in the current folder


###  BanBot Configuration  ###
All the bot config parameters are found in BanBot.cfg.
This file MUST be modified in base to your needs specifiying all the parameters asked insiede
the file.

It's also possibile to make BanBot use a config file ( in another folder/directory ) giving it the file's
location when starting the bot. Example:
./BanBot                        #uses default config file ( same folder where the bot is situated )
./BanBot configs/bot.cfg        #uses file "bot.cfg" in the folder "configs/"

It's possible to insert comments in the config file by adding a "#" at the beggining of the line.
It's not reccomended to leave blank spaces and/or lines inside the config file.

Every operation in structured in the following way:

OptionName=OptionValue  (!!!WITHOUT SPACES BEFORE AND/OR AFTER THE "="!!!)


You'll have to set the following options:

- BOTLOG    : tell the bot where to save it's logfile
- IP        : ip of the UrT server ( !! insert the SERVER ip and not "localhost" or "127.0.0.1"
- PORT      : UrT server port
- RCONPASS  : server's RCON password. Without this the bot can't submit admin actions
- LOGPATH   : server's log file ( specifying path if the bot's executable is in a different directory )
- GUID      : admin(s) guid(s)


!ATTENTION! : all the options must be written only once ( that means you can't have two ip's ecc ) exception of
"GUID". Every single GUID inserted indicates and admin ( or whoever should have rights on the bot ).
You can find out about guid's by taking a look on the server's log file and take them from there.
The bot will listen and execute commands only if given by people with the specified guids.
This means that if you don't setup any guid, the bot won't listen to anyone!



###  Running the Bot  ###

We ( bot developers ) must precise one thing: the bot has a very insignificant consumtion of resources
BUT starting it up with a server log that contains 300000000 lines, it's obvious that parsing the file the
bot will consume a moderate amount of resources for those 30-40 seconds it takes to get to the end of the file.

So if you have to startup the bot ( and not only the first time! )change logfile ( if you're not interested in keeping
a log backup you can simply delete the file, the log server will recreate a new one on the next map ).

After this you can simply startpu the bot with:
~ $./BanBot

If you want to start it up to make it run in background on your server, we advise the creation of a script .sh
and to start it up with the help of "screen".

(botlauncher.sh)
/dircectory/<exec file>

and you can start it up with:

~ $screen -m -d sh botlauncher.sh


###  BanBot commands  ###
The implemented commands so far are:

!ban <number>   : where <number> indicates the user number of the connected client.
                  You can easily find this by typing "\clientlist" from the game's console


=======================
=======================


[ITA]

####  Descrizione generale e note #####

Un bot fatto in C++ che mira ad essere semplice e ad occupare poche risorse
della macchina che lo hosta limitando ( addirittura eliminando ) "lag"
non voluti del server spesso provocati dai bot.
Controlla il gioco di URBAN TERROR 4.1 e utilizza un database SQLite3 per contenere i suoi dati
(la libreria SQLite3 è intergata nel bot, quindi non è richiesto che sia installata sulla macchina).
Controlla periodicamente per giocatori bannati e li elimina automaticamente dal server
evitando il loro rientro nel futuro.

Creato per andare su sistemi Unix/linux ( server Windows non testato! )

Forniamo un eseguibile già compilato che *dovrebbe* essere compatibile con la maggior parte
dei server linux (per chi non ha la possibilità di compilarlo sul server, 
architettura i386) nella cartella "compiled".
Consigliamo comunque di compilare il codice sorgente sul server, dove possibile.

Questa è la prima release (1.0) e le funzionalità sono limitate allo stretto necessario
(pure qualche piccolo extra a dire la verità).
Per segnalazioni di bug, suggerimenti, ecc., trovate una sezione apposita sul sito del nostro clan.
Ogni vostro aiuto o commento sarà apprezzato :>
In caso troviate bug o problemi, possibilmente inviateci anche i log (sia del bot che del server).


Le principali funzionalità del bot:
-ban permanente dal server.
-rimozione ban.
-aggiunta/rimozione admins.
-kick, mute
-backup automatico giornaliero dei file di log.
-controllo di più server sulla stessa macchina con una sola istanza del bot.

####      Requisiti:    #######

Requisiti per la compilazione:
-Sistema operativo Unix/Linux
-compilatore g++
-librerie standard

####       Compilazione del bot:   #######

~ $cd <directory>
~ $make

A questo punto, se la compilazione va a buon termine, viene creato l'eseguibile nella
cartella corrente.

####      Configurazione:    #######

Quasi tutte le configurazioni si trovano su BanBot.cfg.
Il config file del bot dev'essere modificato in base ai propri bisogni specificando
tutti i parametri richiesti nel file.
La responsabilità di una corretta configurazione è totalmente a carico dell'utente.
Se gli fate una configurazione sbagliata, il comportamento del bot può essere completamente
imprevedibile.

è possibile fargli usare un altro file di configurazione (magari situato in una cartella diversa)
passandogli l'indirizzo all'avvio. Per esempio:
./BanBot          				 #usa il file di configurazione di default ( presente nella stessa cartella dell'eseguibile )
./BanBot "configs/bot.cfg" 		 #usa il file di configurazione "bot.cfg" nella sottocartella configs/

Sul file è possibile inserire commenti (mettendo come primo carattere della riga
un cancelletto (#) ) e le opzioni.
Sconsigliamo vivamente di lasciare linee completamente vuote, sia all'interno che all'inizio o alla
fine del file.

Ogni opzione è strutturata nel modo seguente:

Nome_opzione=valore

senza spazi prima e dopo l'uguale!

Le opzioni da settare sono le seguenti:

-BOTLOG   		: imposta dove salvare il log generale del bot.
-BACKUPPATH		: directory dove salvare tutti i backup dei file (se non esiste, viene creata).
-IP       		: ip del server urt (NB: inserire l'ip del server, non localhost o 127.0.0.1)
-PORT     		: porta di accesso al server urt
-RCONPASS 		: password rcon del server (per poter kickare i player, è necessaria)
-LOGPATH  		: percorso del file di log del server urt.
-BOTLOGPATH		: file dove salvare il log specifico del bot (log di questa precisa istanza del gioco).


N.B.: IP, PORT, RCONPASS, LOGPATH e BOTLOGPATH vanno specificati (preferibilmente in quest'ordine)
una volta per ogni server da controllare.
Quindi se il bot deve controllare 3 server, dovete inserire 3 IP, 3 PORT, ecc.

*IMPORTANTE*: i vari log DEVONO avere nomi diversi tra loro, indipendentemente dalla cartella 
dove si trovano, sia quelli del bot che quelli del gioco.
(quindi in caso vogliate controllare più server con lo stesso bot, modificate le cfg del gioco
in modo che il nome del file di log sia diverso, per esempio server1.log, server2.log ecc).


Al primo avvio, dovete indicare al bot almeno uno degli amministratori.
Per questo esiste il file cfg/Adminlist:

qui vanno inseriti il nick e la guid gli admin.
Volendo, basta inserirne anche solo uno, che poi potrà aggiungere gli altri dal gioco
utilizzando la funzione "!op".

La regola per l'inserimento è:
nick=GUID

Le GUID possono essere ricavate dai file di log del server, se sconosciute.
Tutte le persone la cui GUID viene inserita del file di configurazione potranno
usare il bot (il bot risponderà solo ai loro comandi ignorando tutti gli altri).
Il che vuol dire che se non si imposta nessuna GUID, BanBot ignorerà tutti i comandi a lui dati.

#####     Avvio di BanBot   #####

Ad ogni avvio, per evitare di lavorare su file di log vecchi, BanBot esegue un backup di tutti i vecchi file di log
e riavvia la partita su tutti i server (per maggiori info, vedere la sezione Backup).

Detto questo, se volete solo vedere se funziona, è sufficiente avviarlo da terminale:
~: ./BanBot

Per lanciarlo in modo che resti avviato sul server, consigliamo di crearsi uno script per eseguirlo
su un file di estensione .sh, e lanciarlo col comando screen.
Per esempio, noi facciamo così:
    script BotLauncher.sh:
    /home/urts/BanBot

e avviamo il server con
	screen -m -d sh BotLauncher.sh

BanBot si crea da solo tutti i file e le cartelle a lui necessari (e quelle indicate nel file di configurazione, se
non esistono), sempre se riesce a farlo.
In sostanza al primo avvio bastano l'eseguibile (BanBot) e la cartella cfg.
Nel caso il bot vi segnali errori, o non faccia i backup ecc., controllate i permessi delle cartelle.

#####     Backup d'avvio e backup automatico   #####

BanBot esegue due tipi di backup.
Uno all'avvio del bot, in cui sposta tutti i file nella cartella:
	*cartella di backup*/giorno/ora/
dove cartella di backup è quella indicata nel file di configurazione, giorno è la data nel formato anno-mese-giorno, e l'ora
è nel formato HH-MM.

L'altro backup è automatico: 
all'ora fissata (tra le 06:30 e le 06:31 AM) BanBot sposta tutti i file di log nella cartella
	*cartella di backup*/giorno
dove giorno ha sempre il formato anno-mese-giorno.
Quindi avrete tutti i file di log divisi giorno per giorno, senza avere file di log enormi, in automatico.
L'ora di backup è quella del server, e non è possibile al momento cambiarla dal file di configurazione.
Se vi crea particolari problemi col fuso orario, è possibile modificare l'ora solo sul codice sorgente
(su Backup.h: #define HOUR,#define MINUTE e #define OVERMINUTE). Ovviamente, se lo cambiate, dovrete compilare
nuovamente il programma.

######     Utilizzo di BanBot   ######

le <> indicano i parametri OBBLIGATORI, mentre [] sono i parametri opzionali.

<numero> indica il numero assegnato dal server al giocatore: per vedere il numero dei giocatori,
da console del gioco scrivere \clientlist.

<id> indica il numero con cui la persona è memorizzata nel bot, sia come admin che come utente bannato,
che si ottiene utilizzando le funzioni !find e !findop.

<nick> indica il nick (completo o parziale) che si vuole cercare.

I comandi attualmente disponibili sono:

!ban <numero> [reason]	  : banna permanentemente il giocatore <numero>
							per esempio, !ban 11 banna il giocatore 11. 
				 			reason indica il motivo per cui è stato bannato (sconsigliamo i poemi epici :) ),
				 			per esempio !ban 11 wh+aim
				 
!op <numero>			  : registra il giocatore <numero> sul bot come operatore,
							rendendolo in grado di usarne le funzionalità.
				 
!kick <numero> 			  : butta fuori dal server il giocatore <numero>.

!mute <numero>			  : muta/smuta il giocatore <numero>.
							Per esempio, !mute 5  muta il giocatore numero 5, facendo di nuovo
							!mute 5  viene smutato.

!find <nick>			  : cerca <nick> tra gli utenti bannati. Effettua due tipi di ricerche, una
							precisa (cerca il nick esatto, considerando anche maiuscole/minuscole), ed
							una approssimativa (cerca <nick> anche all'interno dei nick registrati,
							ignorando maiuscole/minuscole).
							Per esempio, !find Mye potrebbe restituire come ricerca esatta Mye e come
							ricerca approssimativa Mye, Amye, *Malmyez*, ecc ecc.
							Le liste restituite dalla ricerca sono così formate:
							id nick motivo, id nick motivo, ecc ecc
							dove id è il numero con cui la persona è memorizzata da BanBot, e motivo è
							il motivo per cui è stata bannata. 

!findop <nick>			  : cerca <nick> tra gli admin registrati al bot. La ricerca funziona come
							per il comando !find.
							Le liste restituite dalla ricerca sono così formate:
							id nick, id nick, ecc ecc
							dove id è il numero con cui la persona è memorizzata da BanBot.

!unban <id>				  : sbanna la persona indicata da <id>. Per ottenere l'id, usare la funzione !find.

!deop <id>				  : toglie lo stato di operatore alla persona indicata da <id>. Per ottenere l'id, 
							usare la funzione !findop.


