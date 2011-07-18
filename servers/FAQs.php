<div>
<?php if($_SESSION['language']=="it"){?>
    <p>D - <strong>&Egrave; possibile lanciare script python tramite accesso ssh?</strong></p>
    <p>R - yep. Attualmente non c'&egrave; python disponibile per tutti gli utenti, basta metterlo.
    Se &egrave per uno script di qualche esotica utilit&agrave; per voi ok, se &egrave; per un bot, abbiamo
    deciso di non accettarli.</p>
    <br/>
    <p>D - <strong>I gameserver girano su macchine virtuali o direttamente su server reali?</strong></p>
    <p>R - Direttamente su server reali.</p>
    <br/>
    <p>D - <strong>Qual'&egrave; il rapporto RAM totale macchina/numero di gameserver?</strong></p>
    <p>R - Sulla macchina italiana, 2GB/4gameserver (ovviamente non ci sono solo quelli, vedi servizi di sistema, ma c'&egrave; un
    ampio margine, attualmente &egrave; libero ancora quasi un giga.
    Non abbiamo intenzione comunque di salire di pi&ugrave; di 4 server per 2 giga, tranne rare eccezioni, per
    esempio se sono server piccolissimi e privati, per un quinto.)<br/>
    In ogni caso, se considerate che un singolo game server di UrT occupa circa 200MB,
    vedete da soli che stiamo belli abbondanti :)</p>
    <br/>
    <p>D - <strong>&Egrave; ammesso personalizzare lo script bash di start del gameserver?</strong></p>
    <p>R - Ovviamente si. Noi ne diamo gi&agrave; uno, ma &egrave; possibile cambiarlo tranquillamente.<br />Ovviamente se questo non compromette anche gli altri server.</p>
    <br/>
    <p>D - <strong>&Egrave; possibile installare delle versioni modificate (MOD) di Urban Terror?</strong></p>
    <p>R - Si, previa comunicazione e/o richiesta.</p>
<?php }else {?>
    <p>Q - <strong>Can we run python scripts via ssh access?</strong></p>
    <p>A - yep. Currently, python is not available for all users, but we can easily add it. If it is for a personal script of some use to you ok, but if it's for a bot, we decided not to accept them.</p>
    <br/>
    <p>Q - <strong>Is the game server running on virtual machines or directly on real servers?</strong></p>
    <p>A - Directly on real servers.</p>
    <br/>
    <p>Q - <strong>What is the relationship RAM total machine / number of gameserver?</strong></p>
    <p>A - On the Italian machine, 2GB/4gameserver (obviously there are other services, see system services, but there is a wide margin between used and free ram that is almost 1GB).
    We are not going to use more than 4 servers, with rare exceptions, for example, if servers are very small and private, there might be room for a fifth.)<br/>
    In any case, if you consider that a single UrT game server takes up about 200MB, you can see for ourselves that we are abundant with free ram space :)</p>
    <br/>
    <p>Q - <strong>Am I allowed to customize the bash script used to start the game server?</strong></p>
    <p>A - Obviously yes. We will give you one already, but you can change it according to your use.<br/>Of course only if this does not affect the other servers.</p>
    <br/>
    <p>Q - <strong>Is it possible to install modified versions (MOD) of Urban Terror?</strong></p>
    <p>R - Yes, with a notice and/or a request.</p>
<?php }?>
</div>
