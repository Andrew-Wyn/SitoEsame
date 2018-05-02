<html>
    <head>
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
                <li class="tab"><a class="click" href="#test3">TPSI</a></li>
                <li class="tab"><a class="click" href="#test4">Storia</a></li>
                <li class="tab"><a class="click" href="#test5">Italiano</a></li>
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
            <li><a onclick="rightScroll('')" class="waves-effect"></a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('')" class="waves-effect"></a></li>
        </ul>
        
        
        <ul id="slide-out3" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/tpsbg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">T.P.S.I.</span></a>
            <a href="#!email"><span class="white-text email">Cordva</span></a>
            </div></li>
            <li><a onclick="rightScroll('ApCord')" class="waves-effect">Apache Cordova</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('devapp')" class="waves-effect">Sviluppo App</a></li>
            <li><div class="divider"></div></li>
        </ul>
        
        
        <ul id="slide-out4" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/russiabg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">Storia</span></a>
            <a href="#!email"><span class="white-text email">Riv. Russa</span></a>
            </div></li>
            <li><a onclick="rightScroll('')" class="waves-effect" href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('')" class="waves-effect" class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><div class="divider"></div></li>
        </ul>
        
        
        <ul id="slide-out5" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img style="width: 100% !important;" src="img/itabg.jpg">
            </div>
            <a href="#!name"><span class="white-text name">Italiano</span></a>
            <a href="#!email"><span class="white-text email">Ermetismo</span></a>
            </div></li>
            <li><a onclick="rightScroll('')" class="waves-effect" href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a onclick="rightScroll('')" class="waves-effect" class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><div class="divider"></div></li>
        </ul>
        
        <!-- SISTEMI E RETI -->
        <div id="test1" class="col s12 container">
            <h1>Sistemi e Reti</h1>
            <h3 id="Crittografia">Crittografia</h3>
            Le tecniche di crittografia garantiscono:
            <ul>
                <li>la <strong>segretezza</strong>, ci garantisce che terzi non andranno a leggere il nostro messaggio</li>
                <li>l'<strong>autenticazione</strong>, ci garantisce l'autenticazione univoca del mittente</li>
                <li>l'<strong>affidabilita dei documenti</strong>, ci garantisce che il messaggio non sara modificato da terzi</li>
            </ul>
            La cifratura rappresenta il processo attraverso il quale un messaggio viene reso incomprensibile per gli estranei.<br>
            Per fare questo viene usato un <strong>algoritmo</strong> di cifratura che stabilisce la modalita di codifica, i simboli non cifrati compongono il <strong>Plain Text</strong>,
            mentre i simboli cifrati e quindi sottoposti all'algoritmo si chiameranno <strong>Chyper Text</strong>.<br><br>
            In Crittografia dobbiamo distinguere:
            <ul>
                <li><strong>Codifica</strong>, metodo di scrittura in chiave che consiste nel sostituire alcune parole con altre</li>
                <li><strong>Cifratura</strong>, sostituisce lettere o caratteri</li>                    
            </ul>
            La regola di cifratura è generalmente composta da due elementi:
            <ul>
                <li><strong>Regola</strong>, quello che l'algoritmo fa</li>
                <li><strong>Parametri</strong>, come l'algoritmo fa</li>
            </ul>
            Di seguito riporto alcuni concetti fondamentali della crittografia:
            <ul>
                <li><strong>Crittoanalisi</strong>, comporta lo studio dei metodi per ottenere il significato di informazioni cifrate, normalmente il crittoanalista cerca di trrovare la chiave segreta</li>
                <li><strong>Principio di Kerckhoffs</strong>, dichiara che la chiave in un sistema di cifratura deve essere l'unica cosa segreta, mentere l'algoritmo deve essere conosciuto dal crittoanalista</li>
            </ul>
            <h3 id="CrittografiaSimmetrica">Crittografia Simmetrica</h3>
            La crittografica simmetrica (o a chiave privata) è un metodo crittografico che si basa sull'utilizzo di una signola chiave, che verra utilizzata sia per la codifica che per la decodifca.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/1.png">

                        <figcaption>
                            crittografica simmetrica
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>

            <h4 >Data Encriptyon Standard DES</h4>
            <strong>DES</strong> è un algoritmo simmetrico a chiave segreta di 64 bit di cui 8 sono di controllo e gli altri 56 sono effettivamente utilizzati, quindi avremo una sicurezza di 2^56 combinazioni.
            <h5 >Funzionamento</h5>
            Il DES rispetta il principio di kerckhoffs e i principi di Shannon, <strong>Diffusione</strong> e <strong>Confusione</strong>.
            In pratica il testo in chiaro viene suddiviso in blocchi di 8 byte e scrivendo la codifica ASCII da ogni blocco si otterrà una stringa di 64 cifre binarie, a queste cifre verra applicata una trasposizione di 56 bit alla chiave e successivamente per 16 volte si applica una funzione cifrante di sostituzione dei bit usando due porzioni della chiave di 28 bit ciascuna delle quali viene ruotata a sinistra di un certo numero di bit che dipende dal numero di iterazione; come ultimo passaggio viene fatta una trasposizione inversa a quella iniziale.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/2.jpg">

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

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/3.jpg">

                        <figcaption>
                            3-DES
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            In base alla scelta delle chiavi il 3-DES offre tre alternative:
            <ul>
                <li>K1 != K2 != K3, sicurezza di 2^128</li>
                <li>K1 = K3 != K2, sicurezza di 2^112</li>
                <li>K1 = K2 = K3, compatibilita con DES, sicurezza di 2^56</li>
            </ul>

            <h4 >IDEA</h4>
            Vist che gia da prima del colpo di brute force subito dal DES si pensava che quest'ultimo avesse avuto vita breve, nel 1991 fu sviluppato il cifrario <strong>IDEA</strong><br>
            <h5 id="item-1-2">Funzionamento</h5>
            L'IDEA si basa su concetti simili al DES con chiave a 128 bit.<br>
            I 64 bit (divisione in blocchi del messaggio in chiaro per l'elaborazione dell'algoritmo) vegono divisi in 4 gruppi di 16 e mescolati con 6 chiavi di 16 estratte dalla chiave a 128 bit.<br><br>
            Le chiavi sono generate tramite i seguenti passaggi:
            <ul>
                <li>La chiave a 128 bit è divisa in 8 blocchi di 16 che costituiscono le prime 8 sottochiavi</li>
                <li>Le cifre della chiave a 128 sono spostate di 25 bit a sinistra in modo da generare una nuova combinazione (<strong>shifting</strong>)</li>
                <li>Il secondo passo è ripetuto finche non vengono create 52 sottochiavi</li>
            </ul><br>
            <div class="row">

                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/4.png">

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
            <strong>AES</strong> fu progettato dai due crittologi <strong>joan Daemen</strong> e <strong>Vincent Rijmen</strong> sulla base di tre caratteristiche fondamentali:
            <ul>
                <li>Resistenza contro tutti gli attacchi</li>
                <li>Velocità e compattezza del codice su un ampia gamma di piattaforme</li>
                <li>Semplicità progettuale</li>
            </ul>
            <h5 id="item-1-2">Funzionamento</h5>
            AES è un <strong>cifrario a blocchi</strong> (block cipher) con lunghezza del blocco di 128 bit, ma può avere chiavi inndipendenti l'una dall'altra con lungheza variabiledi 128, 192 o 256 bit, ed effettua una combinazione di <strong>permutazioni</strong> e <strong>sostituzioni</strong>.<br><br>
            La prima operazione eseguita dall'algoritmo è quella di prendere i 128 bit del blocco (16 caratteri = 128/8) e di disporli in una griglia 4*4 byte, fatto cio si sottopone il blocco a 10 round di cifratura composti da 4 operazioni (tranne il 10esimo round che è composto da solo 3 operazioni).<br><br>
            Le operazioni sono le seguenti:<br><br>

            <div style="border-bottom: solid 2px; margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/5.png">

                        <figcaption>
                            Substitute Bytes
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <strong>Substitute Bytes</strong>: ogni byte viene trasformato mediante una permutazione non lineare di byte che vengono mappati tramite una tabella particolare <strong>S-box</strong>
                </div>
            </div>

            <div style="border-bottom: solid 2px; margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/6.png">

                        <figcaption>
                            Shift Rows
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <strong>Shift Rows</strong>: le righe della matrice subiscono un semplice scorrimetno di bytes nell'array <strong>state</strong>
                </div>
            </div>

            <div style="border-bottom: solid 2px; margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/7.png">

                        <figcaption>
                            Mix Columns
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <strong>Mix Columns</strong>: ogni colonna viene trasformata mediante una operazione che può essere vista come una moltiplicazione matriciale con una particolare matrice generata da un polinomio prefissato 
                </div>
            </div>

            <div style="margin-top: 15px; margin-bottom: 5px;" class="row">


                <div class="col-8 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="../img/CrittografiaSimm/5.png">

                        <figcaption>
                            Add Round Key
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    <strong>Add Round Key</strong>: fase dove si utilizza la chiave di round e la sisomma alla matrice, questa operazione rende effettivamente sicuro il testo, non viene eseguita nel 10imo round  
                </div>
            </div>
            <h4 >Limiti degli Algoritmi Simmetrici</h4>
            I cifrari a chiave Privata hanno un problema non di poco conto, ovvero quello di dover concordare la chiave prima di poter effettuare la comunicazione, per bypassare cio esistono i cifrati a chiave pubblica.<br><br>
            <h3 id="CrittografiaAsimmetrica">Crittografia Asimmetrica</h3>
            L'idea alla base della crittografia asimmetrica è quello di avere due chiavi, una pubblica (<strong>Public Key</strong>) e una privata (<strong>Private Key</strong>), 
                la marcia in più che ha questo tipo di cifratura è che avendo una chiave privata e una pubblica non è necessario lo scambio della chiave in quanto quella pubblica è reperibile da tutti.<br><br>
                Ciò comporta due modalita di funzionamento:
                <ul>
                    <li><strong>Modalita Confidenziale</strong>: sono garantite la RISERVATEZZA e l'INTEGRITA' del messaggio</li><br>
                     <div class="row">
                    
                        <div class="col-3"></div>

                        <div class="col-5 cap-left">

                            <div style="width: 80%;" id="immagine" class="cap-left">

                                <img style="width: 100%;" src="../img/CrittografiaAsimm/2.png">

                                <figcaption>
                                    Modalita Confidenziale
                                </figcaption>

                            </div>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <li><strong>Modalita Autenticazione</strong>: garantisce l'INTEGRITA e il NON RIPUDIO ma non grantisce la RISERVATEZZA</li><br>
                    <div class="row">
                        <div class="col-3"></div>

                        <div class="col-5 cap-left">

                            <div style="width: 80%;" id="immagine" class="cap-left">

                                <img style="width: 100%;" src="../img/CrittografiaAsimm/1.jpg">

                                <figcaption>
                                    Modalita Autenticazione
                                </figcaption>

                            </div>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </ul>
                
                <h4 >RSA</h4>
                L'algoritmo <strong>RSA</strong> fu sviluppato nel 1977, l'algoritmo lavora sfruttando le proprieta dei numeri primi.
                Lavora sfruttando una chiave che utilizza un numero <strong>n</strong>, ottenuto dal prodotto di due numeri primi <strong>p</strong> e <strong>q</strong><br>
                <h5 >Funzionamento</h5>
                Il funzionamento dell'algoritmo è il seguente:
                <ul>
                    <li>A deve spedire un messaggio segreto a B</li>
                    <li>B sceglie due numeri primi molto grandi e li moltiplica tra loro</li>
                    <li>B invia ad a in chiaro il numero ottenuto</li>
                    <li>A usa questo numero per cifrare il messaggio</li>
                    <li>A manda il messaggio a B</li>
                    <li>B riceve il messaggio e tramite i due numeri primi decifra il messaggio</li>
                </ul>
                <h5 >Generazione delle Chiavi</h5>
                Il primo passo dell'algoritmo è quello di scegliere due numeri primi <strong>p</strong> e <strong>q</strong> e calcolarne il prodotto <strong>n = p * q</strong>.<br><br>
                Quindi viene scelto un numero <strong>e</strong>, coprimo a e più piccolo di (p-1) (q-1) (<strong>Esponente Pubblico</strong>).<br><br>
                Partendo da <strong>n = p * q</strong> l'algoritmo procede calcolando un numero <strong>d</strong>:<br><br>
                <strong style="margin-left: 30px;">d * e = 1 mod(p-1)(q-1)</strong><br><br>
                Da questa espressione si ottiene:
                <ul>
                    <li>La <strong>Chiave Pubblica</strong> (e,n)</li>
                    <li>La <strong>Chiave Privata</strong> (d,n)</li>
                </ul>
                <h5 >Funzionamento</h5>
                il messaggio <strong>m</strong> che deve essere trasmesso viene anzitutto espresso in forma di numero e deve essere minore di <strong>n</strong>, ovviamente sia più grande <strong>m</strong>
                verrà suddiviso in blocchi.<br>      
                Non approfondisco le specifihe di funzionamento del <strong>rsa</strong>, visto che il concetto importante da spiegare è la generazione delle chiavi.<br>
                
                <h4>Crittografia Ibrida</h4>
                    <p>
                        La crittografia <strong>ibrida</strong> è stata ideata per superare entrambi i limiti dei due sistemi di cifratura.<br>
                        Il meccanismo di questt'ultima consiste nell’utilizzare una prima cifratura asimmetrica per scambiare una chiave detta <strong>chiave di sessione</strong> che sarà utilizzata per la cifratura simmetrica.<br><br>
                    </p>   
            <h3 id="FDE">F.D.E. (Four Dimension Encription)</h3>
            L'F.D.E. è un algoritmo a chiave simmetrica (o privata), scritto da me in JAVA, che lavora con blocchi di 256 bit in chiaro parallelizzati ad una chiave della medesima lunghezza.<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 80%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde1.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
            La peculiarità dell'F.D.E. consiste nell' indicizzare, con 4 indici, ogni singolo bit (lavorando percio con due vettori a quattro dimensioni da 256bit).<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 30%;" id="immagine" class="cap-left">

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
            Il funziamento dell'algoritmo riprende molto quello dello shift rows dell'aes, in piu somma ogni bit di posizione i con quello di posizione i+1, in modo ricorsivo su tutte e quattro le dimensioni (ovviamnete tranne quando i è uguale a 4, sarà il nostro punto di partenza per la decodifica).<br><br>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 30%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde2.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    in questa parte vediamo la somma in xor con la chiave e la somma del bit di posizione i con il bit di posizione i+1
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>

                <div class="col-5 cap-left">

                    <div style="width: 30%;" id="immagine" class="cap-left">

                        <img style="width: 100%;" src="img/Crittografia/fde2.PNG">

                        <figcaption>
                            FDE
                        </figcaption>

                    </div>
                </div>
                <div class="col-4">
                    in questa parte vediamo lo pseudo shift rows attuato alla dimnensione uno, viene attuato nella completezza dell'algorito su tutte le dimensioni.
                </div>
            </div>
        </div>
        
        <!-- MATEMATICA -->
        <div id="test2" class="col s12 container">
            <h1>Matematica</h1>
            <h3 id="gruppi">Gruppi</h3>
            Dato un arbitrario insieme (una data collezione di elementi) non vuoto che chiameremo S; definiamo <strong>A(S)</strong> come l'insieme delle corrispondenze biunivoche tra S e se stesso.<br>
            S è dotato di un operazione di prodotto che per convenzione indicheremo come <strong>(.)</strong>.<br><br>
            L'operatore di prodotto <strong>(.)</strong> è tale che:
            <ul>
                <li>a,b appartenenti a S implica che a.b appartiene ad S --> CHIUSURA</li>
                <li>a,b,c appartenenti a S implica che a.(b.c) = (b.c).a --> LEGGE ASSOCIATIVA</li>
                <li>esiste un elemento e appartenente a S tale che a.e = e.a = a per ogni e appartenente a S --> esiste un elemento identico in S</li>
                <li>per ogni a appertenente a S esiste un a^(-1) appartenente a S tale che a.a^(-1) = a^(-1).a = e --> esistenza degli inversi in S</li>
            </ul><br>
            Un gruppo si dice abeliano (o commutativo) se per ogni a,b appartenenti a S si ha a.b = b.a<br><br>
            L'ordine di un gruppo è il numero di elementi presenti nel gruppo stesso<br>
            <h3 id="anelli">Anelli</h3>
            Un anello si differenzia da un gruppo per il fatto di essere una struttura con due operazioni, dette addizione e moltiplicazione, mentre un gruppo come abbiamo visto ne ha solo una.<br><br>
            Un insieme non vuoto S è un anello associativo se in R sono definite due operazioni denotate con <strong>(+)</strong> e <strong>(.)</strong>, tali che per a,b,c appartenenti a S<br><br>
            <ul>
                <li>a.(b+c) = a.b + a.c e (b+c).a = b.a + c.a</li>
            </ul>
            S è un gruppo abeliano rispetto all'operatore (+)
            <ul>
                <li>a+b appartiene a S</li>
                <li>a+b = b+a</li>
                <li>(a+b)+c = c+(a+b)</li>
                <li>Esiste in S un elemento 0 tale che a+0 = a</li>
                <li>Esiste in S un elemento -a tale che a+(-a) = 0</li>
            </ul>
            S è chiuso rispetto a (.)
            <ul>
                <li>a.b appartiene a S</li>
                <li>(a.b).c = a.(b.c)</li>
                <li></li>
            </ul><br>
            Se in S esiste un elemento 1 allora S darà un anello con unicità<br><br>
            L'anello S sarà commutativo se a.b = b.a con a,b appartenenti a S<br><br>
            Un anello S commutativo e con unicità si chiama Campo<br><br>
            <h3 id="anelli">Campi</h3>
            Parlando di campi ne abbiamo individuato una classe particolare: i campi.<br>
            Un campo è un anello commutativo con unicita nel quale ogni elemento non zero ha un inverso moltiplicativo.<br>
            In altre parole un campo è un anello commutativo nel quale si può dividere per un qualunque elemento non zero.<br>
            <h5>Ampliamento di un campo</h5>
            Nella relazione tra due campi, sia F un campo, un campo K si dice ampliamento di F se K contiene F cioè se F è un sotto-campo di K.
            Il grado di K su F è la dimensione di K come spazio vettoriale su F.<br>
            Si denota con [K:F] il grado di K su F.<br>
            Il caso in cui K è di dimensione finita come spazio vettoriale su F, si dirà allora che K è un ampliamento finito di F.<br><br>
            <h3 id="spazi">Spazi Vettoriali</h3>
            Un insieme non vuoto V si dice spazio-vettoriale sopra un campo F, se V è un gruppo abeliano rispetto a (+) --> anello commutativo.<br>
            Si ha (alfa) appertenente a F (campo) e v apparteniente a V (spazio vettoriale).
            <ul>
                <li>(alfa).(v+w) = (alfa).v + (alfa).w</li>
                <li>((alfa)+(beta)).v = (alfa).v + (beta).w</li>
                <li>(alfa).((beta).v) = ((alfa).(beta)).v</li>
                <li>1.v = v</li>
            </ul>
            <br><br>
        </div>
        
        <!-- TPSI -->
        <div id="test3" class="col s12 container">
            <h1>TPSI</h1>
            <h3 id="ApCord">Apache Cordova</h3>
            Apache Cordova è un framework per lo sviluppo di applicativi per dispoditivi originariamente creato da Nitobi.<br>
            Apache cordova permette ai programmatori di creare applicazioni mobili utilizando CSS3, HTML5, JavaScript e relativi framework invece di affidarsi ad API specifiche delle piattaforme Android, IOS o Windows Phone.<br>
            il framework di apache incapsula il codice creato all'interno delle suddette piattaforme. Le applicazioni così generate non possono né considerarsi puramente native né basate completamente sul web.<br><br>
            <i style="font-size: 15px">attualmente Apache Cordova supporta i sistemi operativi: IOS, BADA, BLACK BERRY, FIREFOX OS, Android, WEB OS, Windws Phone, Symbian, Tizen e Ubuntu Touch.</i><br>
            <h3 id="devapp">Sviluppo App</h3>
            <h5>Requisiti</h5>
            <ul>
                <li><strong>Node.js</strong>, piattaforma event-driven per il download del framwork "cordova"</li>
                <li><strong>Cordova</strong>, versione 8.0.0</li>
                <li><strong>Plugman</strong>, versione 1.5.1, framwork utilizzato per la gestione del plug-in della nostra aplicazione</li>
                <li><strong>Materialize.css/.js</strong>, versione 0.100.2, framework per la gestione della parte grafica in html</li>
                <li><strong>JQuery.js</strong>, versione 3.3.1</li>
            </ul>
            <h5>Perchè in plug-in in Java</h5>
            Utilizzando tale applicazione come dimostrazione del funzionamento dell'algoritmo FDE, ed avendo sviluppato quest'ultimo in java, essendo javascript molto divverso da java, ho avuto la necessità di "scaricare" la computazione su un plug-in in java.<br>
            <h5>HTML5-storage</h5>
            Per la persistenza di dati leggeri e smart dalla versione 5 di HTML W3C ha rilasciato una funzionalita abbastanza importante, che permette la persistenza di piccoli dati in un database indicizzato (chiave --> informazione).<br>
            La specifica introduce due meccanismi del tutto simili ai cookies per la memorizzazione di strutture dati lato client:
            <ul>
                <li><strong>localstorage:</strong> una chiave in questa istanza ha visibilità a livello di dominio, significa che i dati conservati nell’istanza sono visibili in tutte le finestre aperte sul dominio. Quindi questo oggetto va oltre la singola sessione.</li>
                <li><strong>sessionstorage:</strong> la visibilità delle chiavi appartenenti a questa istanza, è limitata alla finestra del browser in cui questa variabile è stata creata. Una volta chiusa a finestra, i dati contenuti in questa istanza verranno distrutti assieme alla finestra stessa. Un’istanza di questo tipo è indicata per casi in cui una transazione è legata ad una singola finestra dell’utente che però può a sua volta avere aperte più finestre del browser con diverse transazioni tutte operative allo stesso tempo.</li>
            </ul>
            <h3 id="app">L' App</h3>
            
        </div>
        
        <!-- STORIA -->
        <div id="test4" class="col s12 container">
            <h1>Storia</h1>
        </div>
        
        <!-- ITALIANO -->
        <div id="test5" class="col s12 container">
            <h1>Italiano</h1>
        </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>