<html>
    <head>
        <title>Tesi Diploma | Moroni Luca</title>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" media="screen" href="css/css.css" type="text/css" />
    </head>
    <body>
        <nav class="nav-extended">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <a href="#" id="1" data-activates="slide-out1" class="d_n lefto button"></a>
            <a href="#" id="2" data-activates="slide-out2" class="d_n lefto button"></a>
            <a href="#" id="3" data-activates="slide-out3" class="d_n lefto button"></a>
            <a href="#" id="4" data-activates="slide-out4" class="d_n lefto button"></a>
            <a href="#" id="5" data-activates="slide-out5" class="d_n lefto button"></a>
            <div id="menu-wrapper" class="prescrolled">
              <div id="hamburger-menu"><span></span><span></span><span></span></div>
            </div>
            </div>
            <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="click active" href="#test1">Sistemi e Reti</a></li>
                <li class="tab"><a class="click" href="#test2">Matematica</a></li>
                <li class="tab"><a class="click" href="#test3">TPSI & Informatica</a></li>
            </ul>
            </div>
        </nav>

            <div style="height: 112px"></div>

        
        <ul id="slide-out1" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/retibg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">Sistemi e Reti</span></a>
            <a href="#!email"><span class="white-text email">F.D.E. Dour Dimension Encription</span></a>
            </div></li>
            <li><a onclick="rightScroll('Crittografia')" class="waves-effect">Crittografica</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('CrittografiaSimmetrica')" class="waves-effect">Crittografia Simmetrica</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('CrittografiaAsimmetrica')" class="waves-effect">Crittografia Asimmetrica</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('FDE')" class="waves-effect">F.D.E.</a></li>
        </ul>
        
        
        <ul id="slide-out2" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/matebg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">Matematica</span></a>
            <a href="#!email"><span class="white-text email">Algebra Lineare</span></a>
            </div></li>
            <li><a onclick="rightScroll('gruppi')" class="waves-effect">Gruppi</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('anelli')" class="waves-effect">Anelli</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('spazi')" class="waves-effect">Spazi</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('spaziD')" class="waves-effect">Spazi Duali</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('matrici')" class="waves-effect">Matrici</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('opmatrici')" class="waves-effect">Proprietà matrici</a></li>
        </ul>
        
        
        <ul id="slide-out3" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/tpsbg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">TPS & Informatica</span></a>
            <a href="#!email"><span class="white-text email">Cordva</span></a>
            </div></li>
            <li><a onclick="rightScroll('ApCord')" class="waves-effect">Apache Cordova</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('devapp')" class="waves-effect">Sviluppo App</a></li>
            <li><div class="divider"></div></li>
        </ul>
        
        <!-- SISTEMI E RETI -->
        <div id="test1" class="col s12 container">
            <h1>Sistemi e Reti</h1>
            <h3 id="Crittografia">Crittografia</h3>
            Le tecniche di crittografia garantiscono:
            <div class="cont_list">
                <ul>
                    <li>la <b>segretezza</b>, ci garantisce che terzi non andranno a leggere il nostro messaggio</li>
                    <li>l'<b>autenticazione</b>, ci garantisce l'autenticazione univoca del mittente</li>
                    <li>l'<b>affidabilita dei documenti</b>, ci garantisce che il messaggio non sara modificato da terzi</li>
                </ul>
            </div>
            La cifratura rappresenta il processo attraverso il quale un messaggio viene reso incomprensibile per gli estranei.<br>
            Per fare questo viene usato un <b>algoritmo</b> di cifratura che stabilisce la modalita di codifica, i simboli non cifrati compongono il <b>Plain Text</b>,
            mentre i simboli cifrati e quindi sottoposti all'algoritmo si chiameranno <b>Chyper Text</b>.<br><br>
            In Crittografia dobbiamo distinguere:
            <ul>
                <li><b>Codifica</b>, metodo di scrittura in chiave che consiste nel sostituire alcune parole con altre</li>
                <li><b>Cifratura</b>, sostituisce lettere o caratteri</li>                    
            </ul>
            La regola di cifratura è generalmente composta da due elementi:
            <ul>
                <li><b>Regola</b>, quello che l'algoritmo fa</li>
                <li><b>Parametri</b>, come l'algoritmo fa</li>
            </ul>
            Di seguito riporto alcuni concetti fondamentali della crittografia:
            <ul>
                <li><b>Crittoanalisi</b>, comporta lo studio dei metodi per ottenere il significato di informazioni cifrate, normalmente il crittoanalista cerca di trrovare la chiave segreta</li>
                <li><b>Principio di Kerckhoffs</b>, dichiara che la chiave in un sistema di cifratura deve essere l'unica cosa segreta, mentere l'algoritmo deve essere conosciuto dal crittoanalista</li>
            </ul>
            <h3 id="CrittografiaSimmetrica">Crittografia Simmetrica</h3>
            La crittografica simmetrica (o a chiave privata) è un metodo crittografico che si basa sull'utilizzo di una signola chiave, che verra utilizzata sia per la codifica che per la decodifca.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/1.png">

                        <figcaption>
                            crittografica simmetrica
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>

            <h4 >Data Encriptyon Standard DES</h4>
            <b>DES</b> è un algoritmo simmetrico a chiave segreta di 64 bit di cui 8 sono di controllo e gli altri 56 sono effettivamente utilizzati, quindi avremo una sicurezza di 2^56 combinazioni.
            <h5 >Funzionamento</h5>
            Il DES rispetta il principio di kerckhoffs e i principi di Shannon, <b>Diffusione</b> e <b>Confusione</b>.
            In pratica il testo in chiaro viene suddiviso in blocchi di 8 byte e scrivendo la codifica ASCII da ogni blocco si otterrà una stringa di 64 cifre binarie, a queste cifre verra applicata una trasposizione di 56 bit alla chiave e successivamente per 16 volte si applica una funzione cifrante di sostituzione dei bit usando due porzioni della chiave di 28 bit ciascuna delle quali viene ruotata a sinistra di un certo numero di bit che dipende dal numero di iterazione; come ultimo passaggio viene fatta una trasposizione inversa a quella iniziale.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/2.jpg">

                        <figcaption>
                            DES
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            <h4 >3-DES</h4>
            Il 3-DES è stato progettato nel 1999, un anno dopo la scoperta della vulnerabilita del DES.<br>
            Il 3-DES comprende due passaggi di cifratura e uno di decifratura DES con tre chiavi diverse per un totale di 128 bit (56*3) quindi una sicurezza di 2^168.
            <h5 id="item-1-2">Funzionamento</h5>

            <div class="row">

                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/3.jpg">

                        <figcaption>
                            3-DES
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            In base alla scelta delle chiavi il 3-DES offre tre alternative:
            <div class="cont_list">
                <ul>
                    <li>K1 != K2 != K3, sicurezza di 2^128</li>
                    <li>K1 = K3 != K2, sicurezza di 2^112</li>
                    <li>K1 = K2 = K3, compatibilita con DES, sicurezza di 2^56</li>
                </ul>
            </div>
            <h4 >IDEA</h4>
            Vist che gia da prima del colpo di brute force subito dal DES si pensava che quest'ultimo avesse avuto vita breve, nel 1991 fu sviluppato il cifrario <b>IDEA</b><br>
            <h5 id="item-1-2">Funzionamento</h5>
            L'IDEA si basa su concetti simili al DES con chiave a 128 bit.<br>
            I 64 bit (divisione in blocchi del messaggio in chiaro per l'elaborazione dell'algoritmo) vegono divisi in 4 gruppi di 16 e mescolati con 6 chiavi di 16 estratte dalla chiave a 128 bit.<br><br>
            Le chiavi sono generate tramite i seguenti passaggi:
            <ul>
                <li>La chiave a 128 bit è divisa in 8 blocchi di 16 che costituiscono le prime 8 sottochiavi</li>
                <li>Le cifre della chiave a 128 sono spostate di 25 bit a sinistra in modo da generare una nuova combinazione (<b>shifting</b>)</li>
                <li>Il secondo passo è ripetuto finche non vengono create 52 sottochiavi</li>
            </ul><br>
            <div class="row">

                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/4.png">

                        <figcaption>
                            IDEA
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            <!-- INGLESE -->
            <h4 >AES</h4>
            It isn’t feistel cipher, the encritpion and decription aren’t equals, It works in parallel over the whole input block, Design to be efficient both in hardware and software across a variety of platforms.<br>
            It’s a block cipher which works iteratively:<br>
            <div class="cont_list">
                <ul>
                    <li><b>block size</b>: 128, 192, 256 bit</li>
                    <li><b>Key length</b>: 128, 192, 256 bit</li>
                    <li><b>Number of round</b>: 10, 12, 14</li>
                    <li><b>key scheduling</b>: 44, 52, 60 sub-keys</li>
                </ul>
            </div>
            <h5 id="item-1-2">State</h5>
            internally, the aes algorithm’s operations are performed on a two dimensional array (matrix) of bytes called the state.<br>
            the array of bytes in input is copied in the state matrix.<br>
            in the end, the state matrix is copied in the output matrix.<br><br>
            Algorithm is composed of three layers:
            <div class="cont_list">
                <ul>
                    <li>linear diffusion</li>
                    <li>non-linear diffusion</li>
                    <li>key mixing</li>
                </ul>
            </div>	
            <h5>RIJDAEL: HIGH-LEVEL DESCRIPTION:</h5>
            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">
                <div class="col-8 cap-left">

                    <div style="width: %;"60 id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/aeshl.PNG">

                        <figcaption>
                            AES
                        </figcaption>

                    </div>
                </div>
            </div>
            Each round, ecxept the last one, is a uniform and parallel composition of 4 steps (the last haven't mix columns):
            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/5.png">

                        <figcaption>
                            Substitute Bytes
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Substitute Bytes</b>: Byte substitution using a non-linear (but invertible) S-Box
                    S-Box is represented as a 16x16 array, rows and columns indexed by hexadecimal bits 
                    8bit replaced as follows: 8 bits define a hexadecimal number rc, then Sr,c = binary(S-Box(r,c))
                </div>
            </div>

            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/6.png">

                        <figcaption>
                            Shift Rows
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Shift Rows</b>: circular left shift of a number of bytes equal to the row number
                </div>
            </div>

            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/7.png">

                        <figcaption>
                            Mix Columns
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Mix Columns</b>: interpret each column as a vector of length 4
                    each column of state is replaced by another column obtained by multiplying that column with a matrix in a particular field (Galois Field)
                </div>
            </div>

            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/8.png">

                        <figcaption>
                            Add Round Key
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Add Round Key</b>: the last phase consist to sum with xor each bit of the state with each bit of the round key bit by bit.
                </div>
            </div>
            <h5>AES Key Expansion</h5>
            use 4 byte words called Wi = row of a matrixkey, subkey = 4 words<br>
            first subkey (w3, w2, w1, w0) = cipher key<br>
            other words are calculated as follows, for all values of i that aren’t multples of 4<br>

            for the words with indexes that are multiples of 4 (w4k):
            <div class="cont_list">
                <ul>
                    <li><b>rotWord</b>: bytes of w4k-1 are rotated left shift (non-linearity)</li>
                    <li><b>subWord</b>: subBytes fn is applied to all four Bytes (Diffusion)</li>
                    <li>the result rsk is xor’ed with w4k-4 and a round constant rconk (breaks symmetry)</li>
                </ul>
            </div>
            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">
                <div class="col-8 cap-left">

                    <div style="width: %;"60 id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaSimm/aesexpasion.PNG">

                        <figcaption>
                            AES
                        </figcaption>

                    </div>
                </div>
            </div>
            <h4>Limiti degli Algoritmi Simmetrici</h4>
            I cifrari a chiave Privata hanno un problema non di poco conto, ovvero quello di dover concordare la chiave prima di poter effettuare la comunicazione, per bypassare cio esistono i cifrati a chiave pubblica.<br><br>
            <h3 id="CrittografiaAsimmetrica">Crittografia Asimmetrica</h3>
            L'idea alla base della crittografia asimmetrica è quello di avere due chiavi, una pubblica (<b>Public Key</b>) e una privata (<b>Private Key</b>), 
            la marcia in più che ha questo tipo di cifratura è che avendo una chiave privata e una pubblica non è necessario lo scambio della chiave in quanto quella pubblica è reperibile da tutti.<br><br>
            Ciò comporta due modalita di funzionamento:<br><br> 
            <div class="row">

                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaAsimm/2.png">

                        <figcaption>
                            Modalita Confidenziale
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Modalita Confidenziale</b>: sono garantite la RISERVATEZZA e l'INTEGRITA' del messaggio
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/CrittografiaAsimm/1.jpg">

                        <figcaption>
                            Modalita Autenticazione
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <b>Modalita Autenticazione</b>: garantisce l'INTEGRITA e il NON RIPUDIO ma non grantisce la RISERVATEZZA
                </div>
            </div>

            <h4 >RSA</h4>
            L'algoritmo <b>RSA</b> fu sviluppato nel 1977, l'algoritmo lavora sfruttando le proprieta dei numeri primi.
            Lavora sfruttando una chiave che utilizza un numero <b>n</b>, ottenuto dal prodotto di due numeri primi <b>p</b> e <b>q</b><br>
            <h5 >Funzionamento</h5>
            Il funzionamento dell'algoritmo è il seguente:
            <div class="cont_list">
                <ul>
                    <li>A deve spedire un messaggio segreto a B</li>
                    <li>B sceglie due numeri primi molto grandi e li moltiplica tra loro</li>
                    <li>B invia ad a in chiaro il numero ottenuto</li>
                    <li>A usa questo numero per cifrare il messaggio</li>
                    <li>A manda il messaggio a B</li>
                    <li>B riceve il messaggio e tramite i due numeri primi decifra il messaggio</li>
                </ul>
            </div>
            <h5 >Generazione delle Chiavi</h5>
            Il primo passo dell'algoritmo è quello di scegliere due numeri primi <b>p</b> e <b>q</b> e calcolarne il prodotto <b>n = p * q</b>.<br><br>
            Quindi viene scelto un numero <b>e</b>, coprimo a e più piccolo di (p-1) (q-1) (<b>Esponente Pubblico</b>).<br><br>
            Partendo da <b>n = p * q</b> l'algoritmo procede calcolando un numero <b>d</b>:<br><br>
            <b style="margin-left: 30px;">d * e = 1 mod(p-1)(q-1)</b><br><br>
            Da questa espressione si ottiene:
            <div class="cont_list">
                <ul>
                    <li>La <b>Chiave Pubblica</b> (e,n)</li>
                    <li>La <b>Chiave Privata</b> (d,n)</li>
                </ul>
            </div>
            <h5 >Funzionamento</h5>
            il messaggio <b>m</b> che deve essere trasmesso viene anzitutto espresso in forma di numero e deve essere minore di <b>n</b>, ovviamente sia più grande <b>m</b>
            verrà suddiviso in blocchi.<br>      
            Non approfondisco le specifihe di funzionamento del <b>rsa</b>, visto che il concetto importante da spiegare è la generazione delle chiavi.<br>

            <h4>Crittografia Ibrida</h4>
            <p>
                La crittografia <b>ibrida</b> è stata ideata per superare entrambi i limiti dei due sistemi di cifratura.<br>
                Il meccanismo di questt'ultima consiste nell’utilizzare una prima cifratura asimmetrica per scambiare una chiave detta <b>chiave di sessione</b> che sarà utilizzata per la cifratura simmetrica.<br><br>
            </p>   
            <h3 id="FDE">F.D.E. (Four Dimension Encription)</h3>
            L'F.D.E. è un algoritmo a chiave simmetrica (o privata), scritto da me in JAVA, che lavora con blocchi di 256 bit in chiaro parallelizzati ad una chiave della medesima lunghezza.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 40%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde1.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            La peculiarità dell'F.D.E. consiste nell' indicizzare, con 4 indici, ogni singolo bit (lavorando percio con due vettori a quattro dimensioni da 256bit), ciò garantisce un estrema malleabilità del flusso di bit.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 20%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde2.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            <h5>Funzionamento</h5>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 30%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/FDE_HL.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    FDE - High Level Description
                </div>
            </div>
            Il funziamento dell'algoritmo riprende molto quello dello shift rows dell'aes, inoltre somma ogni bit di posizione i con quello di posizione i+1, in modo ricorsivo su tutte e quattro le dimensioni (ovviamnete tranne quando i è uguale a 4, sarà il nostro punto di partenza per la decodifica), infine cifra ogni bit del blocco in chiaro con il suo corrispettivo nel blocco chiave.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde3.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    in questa parte vediamo la somma in xor con la chiave e la somma del bit di posizione i con il bit di posizione i+1.
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 60%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde4.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    in questa parte vediamo lo pseudo-shiftrows attuato alla dimensione uno, viene poi ripetuto nella completezza dell'algorito su tutte le dimensioni tranne la più esterna, in modo ricorsivo.
                </div>
            </div>
            Il complesso di operazioni appena descritto rappresenta il cuore dell'algoritmo e viene ripetuto quattro volte per una completa azione crittografica.<br><br>
        </div>
        
        <!-- MATEMATICA -->
        <div id="test2" class="col s12 container">
            <h1>Matematica</h1>
            <h3 id="gruppi">Gruppi</h3>
            Dato un arbitrario insieme (una data collezione di elementi) non vuoto che chiameremo S; definiamo <b>A(S)</b> come l'insieme delle corrispondenze biunivoche tra S e se stesso.<br>
            S è dotato di un operazione di prodotto che per convenzione indicheremo come <b>(.)</b>.<br><br>
            L'operatore di prodotto <b>(.)</b> è tale che:
            <div class="cont_list">
                <ul>
                    <li>a,b appartenenti a S implica che a.b appartiene ad S --> CHIUSURA</li>
                    <li>a,b,c appartenenti a S implica che a.(b.c) = (b.c).a --> LEGGE ASSOCIATIVA</li>
                    <li>esiste un elemento e appartenente a S tale che a.e = e.a = a per ogni e appartenente a S --> esiste un elemento identico in S</li>
                    <li>per ogni a appertenente a S esiste un a^(-1) appartenente a S tale che a.a^(-1) = a^(-1).a = e --> esistenza degli inversi in S</li>
                </ul>
            </div>
            Un gruppo si dice abeliano (o commutativo) se per ogni a,b appartenenti a S si ha a.b = b.a<br><br>
            L'ordine di un gruppo è il numero di elementi presenti nel gruppo stesso<br>
            <h3 id="anelli">Anelli</h3>
            Un anello si differenzia da un gruppo per il fatto di essere una struttura con due operazioni, dette addizione e moltiplicazione, mentre un gruppo come abbiamo visto ne ha solo una.<br><br>
            Un insieme non vuoto S è un anello associativo se in R sono definite due operazioni denotate con <b>(+)</b> e <b>(.)</b>, tali che per a,b,c appartenenti a S
            <div class="cont_list">    
                <ul>
                    <li>a.(b+c) = a.b + a.c e (b+c).a = b.a + c.a</li>
                    <li>a+b appartiene a S</li>
                    <li>a+b = b+a</li>
                    <li>(a+b)+c = c+(a+b)</li>
                    <li>Esiste in S un elemento 0 tale che a+0 = a</li>
                    <li>Esiste in S un elemento -a tale che a+(-a) = 0</li>
                    <li>a.b appartiene a S</li>
                    <li>(a.b).c = a.(b.c)</li>
                </ul>
            </div>
            Se in S esiste un elemento 1 allora S darà un anello con unicità<br><br>
            L'anello S sarà commutativo se a.b = b.a con a,b appartenenti a S<br><br>
            Un anello S commutativo e con unicità si chiama Campo<br><br>
            <h3 id="anelli">Campi</h3>
            Parlando di anelli ne abbiamo individuato una classe particolare: i campi.<br>
            Un campo è un anello commutativo con unicita nel quale ogni elemento non zero ha un inverso moltiplicativo.<br>
            In altre parole un campo è un anello commutativo nel quale si può dividere per un qualunque elemento non zero.<br>
            <h5>Campo di Galois</h5>
            ...
            <h5>Ampliamento di un campo</h5>
            Nella relazione tra due campi, sia F un campo, un campo K si dice ampliamento di F se K contiene F cioè se F è un sotto-campo di K.
            Il grado di K su F è la dimensione di K come <b>spazio vettoriale</b> su F.<br>
            Si denota con [K:F] il grado di K su F.<br>
            Il caso in cui K è di dimensione finita come spazio vettoriale su F, si dirà allora che K è un ampliamento finito di F.<br><br>
            <h3 id="spazi">Spazi Vettoriali</h3>
            Un insieme non vuoto V si dice spazio-vettoriale sopra un campo F, se V è un gruppo abeliano rispetto a (+) --> anello commutativo.<br>
            Si ha (alfa) appertenente a F (campo) e v apparteniente a V (spazio vettoriale).
            <div class="cont_list">    
                <ul>
                    <li>(alfa).(v+w) = (alfa).v + (alfa).w</li>
                    <li>((alfa)+(beta)).v = (alfa).v + (beta).w</li>
                    <li>(alfa).((beta).v) = ((alfa).(beta)).v</li>
                    <li>1.v = v</li>
                </ul>
            </div>
            <h5>Immagine, Nucleo</h5>
            Dato il solito spazio vettoriale V basato su un campo F.<br>
            Consideriamo un applicazione lineare K:V -> W, l'<b>immagine</b> sono tutti quegli elementi che vengono portati da V in W, quindi l'immagine di V in W è un sotto-gruppo di W.<br>
            Consideriamo un applicazione lineare K:V -> W, il <b>nucleo</b> sono tutti quegli elementi di V che vanno nello 0 di W.
            <h3 id="spaziD">Spazi Duali</h3>
            Definiamo cosa è un <b>omomorfismo</b>, è un applicazione di un sistema algebrico ad un altro simile che ne conserva la struttura.<br>
            L'insieme degli omomorfismi che mandano lo spazio vettoriale U nello spazio V si indica con <b>HOM(U,V)</b>.<br>
            DEF:<br>
            Siano S e T due elementi di HOM(U,V), ovvero due omomorfismi di spazio vettoriale di U in V:<br>
            <div class="cont_list">    
                <ul>
                    <li>S+T appartiene a HOM(U,V) -> Chiusura.</li>
                    <li>sia O l'omomorfismo di U in V che manda ogni elemento di U nello 0 di V -> trovando cosi il <b>nucleo</b> di U</li>
                </ul>
            </div>
            Definito ciò possiamo dire che HOM(U,V) è un gruppo abeliano rispetto alla somma e perciò uno spazio vettoriale su F.<br>
            Possiamo infine dichiarare che se U è uno spazio vettoriale il suo spazio duale è dato da HOM(U,V).
            <h3 id="matrici">Matrici</h3>
            Sia V uno spazio vettoriale n-dimensionale sopra un campo F e sia v1, ..., vn una base di V su F. se T appartiene a HOM(V,V) la sua azione (applicazione lineare) su ciascun vettore è determinata non appena se ne conosca l'azione su una base di V e, pertanto, sono esprimbili come <b>combinazione lineare</b> di v1, ..., vn su F, cioè:
            
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 60%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Matematica/1.jpg">

                        <figcaption>
                            Algebra
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 60%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Matematica/2.jpg">

                        <figcaption>
                            Algebra
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 60%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Matematica/3.jpg">

                        <figcaption>
                            Algebra
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            
            L'insieme ordinato di n<SUP>2</SUP> numeri &alpha;<SUB>i</SUB><SUB>j</SUB> in F (campo dello spazio V) descrive completamente l'applicazione T e costituisce un mezzo per rappresentarla e metterla in pratica.
            <h3 id="opmatrici">Operazioni sulle matrici</h3>
        </div>
        
        <!-- TPSI -->
        <div id="test3" class="col s12 container">
            <h1>TPSI & Informatica</h1>
            <h3 id="ApCord">Apache Cordova</h3>
            Apache Cordova è un framework per lo sviluppo di applicativi per dispositivi originariamente creato da Nitobi.
            Apache Cordova permette ai programmatori di creare applicazioni mobili utilizzando CSS3, HTML5, JavaScript e relativi framework invece di affidarsi ad API specifiche delle piattaforme Android, IOS o Windows Phone.
            il framework di apache incapsula il codice creato all'interno delle suddette piattaforme. Le applicazioni così generate non possono né considerarsi puramente native né basate completamente sul web.<br><br>
            <i style="font-size: 15px">attualmente Apache Cordova supporta i sistemi operativi: IOS, BADA, BLACK BERRY, FIREFOX OS, Android, WEB OS, Windws Phone, Symbian, Tizen e Ubuntu Touch.</i><br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 60%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Tps_Inf/cordova.png">

                        <figcaption>
                            Cordova
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            <h3 id="devapp">Sviluppo App</h3>
            <h5>Requisiti</h5>
            <div class="cont_list">
                <ul>
                    <li><b>Node.js</b>, piattaforma event-driven per il download del framwork "cordova"</li>
                    <li><b>Cordova</b>, versione 8.0.0</li>
                    <li><b>Plugman</b>, versione 1.5.1, framwork utilizzato per la gestione del plug-in della nostra aplicazione</li>
                    <li><b>Materialize.css/.js</b>, versione 0.100.2, framework per la gestione della parte grafica in html</li>
                    <li><b>JQuery.js</b>, versione 3.3.1</li>
                </ul>
            </div>
            <h5>Cordova e i Plug-in</h5>
            Dalla versione 3.0 in poi, Cordova implementa nel dispositivo tutte le API come plugin e li lascia disattivati di default. 
            Supporta inoltre due modi per aggiungere e rimuovere i plugin, a seconda del flusso di lavoro sul quale si opera:
            • Se si utilizza un flusso di lavoro multi-piattaforma, è preferibile utilizzare la CLI implementata in cordova per aggiungere i plugin. La CLI di cordova Modifica i plugin per tutte le piattaforme utilizzate in una volta.
            • Se si utilizza un flusso di lavoro su singole piattaforme, si consiglia l'utilizzo di un'interfaccia della riga di comando di basso livello Plugman , che installa separatamente per ciascuna piattaforma il plugin desiderato.
            <h5>Perchè un plug-in in Java</h5>
            Utilizzando tale applicazione come dimostrazione del funzionamento dell'algoritmo FDE, ed avendo sviluppato quest'ultimo in java, essendo Java script molto diverso da quest’ultimo, ho avuto la necessità di "scaricare" la computazione su un plug-in in java.<br>
            <h5>HTML5-storage</h5>
            Per la persistenza di dati leggeri e smart dalla versione 5 di HTML W3C ha rilasciato una funzionalita abbastanza importante, che permette la persistenza di piccoli dati in un database indicizzato (chiave --> informazione).<br>
            La specifica introduce due meccanismi del tutto simili ai cookies per la memorizzazione di strutture dati lato client:
            <ul>
                <li><b>localstorage:</b> una chiave in questa istanza ha visibilità a livello di dominio, significa che i dati conservati nell’istanza sono visibili in tutte le finestre aperte sul dominio. Quindi questo oggetto va oltre la singola sessione.</li>
                <li><b>sessionstorage:</b> la visibilità delle chiavi appartenenti a questa istanza, è limitata alla finestra del browser in cui questa variabile è stata creata. Una volta chiusa a finestra, i dati contenuti in questa istanza verranno distrutti assieme alla finestra stessa. Un’istanza di questo tipo è indicata per casi in cui una transazione è legata ad una singola finestra dell’utente che però può a sua volta avere aperte più finestre del browser con diverse transazioni tutte operative allo stesso tempo.</li>
            </ul>
            <h3 id="app">L' App</h3>
             <div class="gallery">
                  <ul class="gallery_thumbnails">
                    <li class="gallery_thumb"><img src="img/Tps_Inf/1.png"/></li>
                    <li class="gallery_thumb"><img src="img/Tps_Inf/2.png"/></li>
                    <li class="gallery_thumb"><img src="img/Tps_Inf/3.png"/></li>
                    <li class="gallery_thumb"><img src="img/Tps_Inf/4.png"/></li>
                    <li class="gallery_thumb"><img src="img/Tps_Inf/5.png"/></li>
                    <li class="gallery_thumb"><img src="img/Tps_Inf/6.png"/></li>
                  </ul>
                  <div style="width: 30%;" class="gallery_featured" id="selectedImage">
                      <li class="gallery_thumb"><img src="img/Tps_Inf/1.png"/></li>
                  </div>
                </div>     
            </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Tesi Diploma - Moroni Luca - 5°AIA</h5>
                <p class="grey-text text-lighten-4">Contenuto multimediale ideato e sviluppato da:<br> Moroni Luca</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright
            </div>
          </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/js.js"></script>
        <script>
            var root = document.documentElement;
            root.className = root.className.replace(/\bno-js\b/g, '') + ' js';

            // Domready check in vanila javaScript
            // Arrays and node lists
            var ready = function ( fn ) {

            // Sanity check
              if ( typeof fn !== 'function' ) return;

            // If document is already loaded, run method
              if ( document.readyState === 'interactive' || document.readyState === 'complete' ) {
                return fn();
              }

            // Otherwise, wait until document is loaded
              document.addEventListener( 'DOMContentLoaded', fn, false );

            };

            ready(function() {

              root.className = root.className.replace(/\bdombuilding\b/g, '') + ' domready';

              var thumbs = document.querySelectorAll( '.gallery_thumb' );
              var selectedImage =  document.querySelector('#selectedImage');

              for ( var i = 0, len = thumbs.length; i < len; i++ ) {

                thumbs[i].addEventListener( 'click', function( event ) {

                    var firstChild = this.firstChild;
                    var dataOsrc = firstChild.getAttribute('src');
                    var ceprovo = $(selectedImage).children()[0];
                    var chcepro = $(ceprovo).children()[0];
                    chcepro.setAttribute('src', dataOsrc);
                }, false);

              }
            });
        </script>
    </body>
</html>