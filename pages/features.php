<?php
    function displayFeaturesPage($lang) {
        $en = [];
        $de = [];
        $content = [];

        $en['learn_more'] = '
                        <p class="title">Learn more - How does it work?</p>
        ';
        $de['learn_more'] = '
                        <p class="title">Mehr erfahren - Wie funktioniert es?</p>
        ';

        $en['try_it_out'] = '
                        <p class="title">Try it out</p>
                        <p>The new version of Applied Experience\'s knowledge management tool, AppEx, is in beta version.
                            To try it out and be part of a growing community of beta testers, please contact us at
                            info@appex.ch.
                        </p>
        ';
        $de['try_it_out'] = '
                        <p class="title">Testen</p>
                        <p>Bitte nehmen Sie unverbindlich Kontakt mit uns auf,
                         um die Funktionalität und den Nutzen der AppEx Software kennen zu lernen und um eine mögliche Einführung zu diskutieren.
                          Sie erreichen uns unter info@appex.ch.
                        </p>
        ';

        $en['about_us'] = '
                    <p class="title">About us</p>
                    <p>Applied Experience, Inc. was founded in 2005 in Silicon Valley, CA and provided intranet design
                        and the web-based knowledge management tool Connected Projects to general contractors and
                        owners, several of them large, national firms.
                    </p>
                    <br/>
                    <p>Currently Applied Experience GmbH is based in Switzerland and internationally active with its
                        new and vastly improved tool AppEx.</p>
        ';
        $de['about_us'] = '
                    <p class="title">Über uns</p>
                    <p>Applied Experience, Inc. wurde 2005 im Silicon Valley gegründet und bot neben Intranet Dienstleistungen die Wissensmanagement Software Connected Projects an,
                     welche bei grossen nationalen Generalunternehmern und Bauherren Anwendung fand.</p>
                     <br/>
                    <p>Seit 2009 ist die Firma in der Schweiz angesiedelt und bietet die völlig neue AppEx Software für Wissensmanagement an.</p>
        ';

        $en['how_does_it_work'] = '
                    <p class="title">How does it work?</p>
                    <p>AppEx is a planning and reporting tool for anyone with coordinative responsibilities in a project
                        (architects, general contractors, construction managers, owner representatives). AppEx can be
                        deployed by individuals or firms of any size and allows the accumulation of personal or corporate
                        knowledge.
                    </p>
                    <br>
                    <p> AppEx operates on a customizable framework of project phases and construction/planning disciplines.
                        This unique array perspective ensures that experiences from latter project phases are captured
                        and turned into planning activities in preceding phases on future projects. For each phase and
                        discipline users create planning worksheets with a blend of personal lessons and relevant lessons
                        from a large database.These can be used as personal planning tools or for kick-off meetings.</p>
                    <br>
                    <p> For reporting purposes an overview array shows the project status visually with activities that have
                        been checked for quality and open issues. This gives owners the assurance that lessons are being
                        applied in the planning of activities and work products are checked for quality at every phase
                        of a project.</p>
                    <br>
                    <p>The software interacts with users at defined milestones to capture their new experiences and lessons,
                        ensuring the continuous accumulation and sharing of experiences and knowledge.</p>
        ';
        $de['how_does_it_work'] = '
                    <p class="title">Wie funktioniert es?</p>
                    <p>AppEx ist eine Web-basiertes Planungs- und Analysetool für alle, die in Planungs- und Bauprojekten
                        koordinative Aufgaben wahrnehmen (Architekten, Baumanager, Generalunternehmer, Bauherrenvertreter).
                        AppEx kann von Einzelpersonen oder Firmen jeder Grösse eingesetzt werden. AppEx ermöglicht es,
                        Erfahrungen von Personen und Firmen zu dokumentieren und anwendbar zu machen.</p>
                    <br>
                    <p>AppEx operiert mit einem anpassbaren Gerüst aus Projektphasen und Gewerken. Dieses spezielle Rahmenwerk
                        stellt sicher, dass Erfahrungen aus späteren Projektphasen dokumentiert und in anderen Projekten
                        in Planungsaktivitäten in früheren Phasen umgewandelt werden. Pro Phase und Gewerk lassen sich
                        Arbeitsblätter mit einer Mischung aus persönlichen und übergeordneten Lehren erstellen. Diese
                        Arbeitsblätter können als Planungshilfen oder Startsitzungen eingesetzt werden </p>
                    <br>
                    <p>Zur Projektanalyse dokumentiert eine Karte grafisch den Projektstand mit geplanten, offenen, und
                        geprüften Aktivitäten. Dies gibt Bauherren die Gewissheit, dass Lehren in der Planung von Aktivitäten
                        einfliessen, und dass Arbeitsprodukte in jeder Phase auf Qualität geprüft werden.</p>
                    <br>
                    <p>AppEx kontaktiert Nutzer zu definierten Meilensteinen, um neue Erfahrungen und Lehren zu dokumentieren
                        und stellt so den lückenlosen Zyklus von Wissenserfassung und Wissensaustausch sicher.</p>
        ';

        if ($lang == 'de') {
            $content = $de; 
        } else if ($lang == 'en') {
            $content = $en; 
        }


        echo '<div class="tiles" class="marginTop">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child box">
                           '.$content['learn_more'].'
                        </article>
    
                        <article class="tile is-child box">
                            <article class="message is-dark">
                                <div class="message-body">
                                '.$content['try_it_out'].'
                                    <br>
                                    <!-- <a style="text-decoration:none" href="https://appex.ch/login#/">
                                        <button class="button ">Take me to the Website</button>
                                    </a> -->
                                </div>
                            </article>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <figure class="image">
                                <img src="images/concrete.jpg">
                            </figure>
                        </article>
                    </div>
                </div>
    
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <article class="message is-dark">
                            <div class="message-body">
                            '.$content['about_us'].'
                            </div>
                        </article>
                    </article>
                </div>
            </div>
    
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <article class="message is-dark">
                        <div class="message-body">
                            '.$content['how_does_it_work'].'
                        </div>    
                    </article>
                </article>
                </div>
            </div>
        </div>
        <p class="bottomspace">';
    }
?>