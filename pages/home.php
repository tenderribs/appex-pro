<?php
    function displayHomePage($lang) {
        $en = [];
        $de = [];
        $content = [];
        
        $en['Learn_from_Experience'] = 'Learn from Experience';
        $de['Learn_from_Experience'] = 'Aus Erfahrungen lernen';

        $en['features'] = '
                    <p class="title">Features</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>AppEx is a web-based planning and reporting tool for anyone with coordinative responsibilities
                                    in a building project. AppEx can be used by individuals or companies.</p>
                                <br>
                                <p>AppEx is experience-based. It allows you plan activities based on the knowledge and experiences
                                    gained by you or people in your organization.</p>
                                <br>
                                <p>AppEx allows you to record solutions to problems and document the quality of work products
                                    upon completion of project phases.</p>
                                <br>
                                <p>AppEx shows graphic status maps of projects, making the planning and QC status of projects
                                    very visible.
                                </p>
                            </div>
                        </article>
                    </div>
                    ';
        $de['features'] = '
                    <p class="title">
                    Was ist AppEx?</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>
                                AppEx ist eine Web-basiertes Planungs- und Qualitätsmanagement Tool. AppEx dokumentiert Erfahrungen 
                                in Projekten und wandelt diese in Lehren um, damit Fehler vermieden und Prozesse verbessert werden können.
                                 AppEx eignet sich für alle Firmen, die in Planungs- und Bauprojekten koordinative Aufgaben wahrnehmen 
                                 (Architekten, Generalplaner, Baumanager, Generalunternehmer, Kostenplaner, Bauherrenvertreter).
                                </p>
                            </div>
                        </article>
                </div>
                        ';
        $en['our_services'] = '
                    <p class="title">Our services</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>Applied Experience GmbH develops and distributes the AppEx knowledge management software,
                                    which can be deployed by individuals or firms. For firms we also offer consulting services
                                    to develop inhouse knowledge management expertise. </p>
                            </div>
                        </article>
                    </div>';
        $de['our_services'] = '
                    <p class="title">Unser Angebot</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>Applied Experience GmbH entwickelt und vertreibt die AppEx Software. 
                                Wir beraten Sie bei der Einführung der Software und im Aufbau von Wissensmanagement Kompetenzen.</p>
                            </div>
                        </article>
                    </div>';

        $en['benefits'] = '
                    <p class="title">Benefits</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>• Very easy to use. Saves time in the preparation of estimates, submittals, and field QC
                                    documents
                                </p>
                                <p>• Higher planning quality in early project phases results in more accurate submittals, and
                                    cost estimates. This means fewer change orders, rework and claims </p>
                                <p>• Helps you ask clients the important design questions early </p>
                                <p>• See project status at a glance, including potential risks and open issues</p>
                                <p>• Make experiences actionable for future projects</p>
                                <p>• Always available - works on all mobile devices
                            </div>
                        </article>
        </div>';

        $de['benefits'] = '
                    <p class="title">Nutzen</p>
                    <div class="content">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p>• Sehr einfache Anwendung. Spart Zeit und vermeidet Fehler in der Erstellung von Plänen,
                                    Kostenvoranschlägen und Submissionen, sowie in der Qualitätskontrolle auf der Baustelle</p>
                                <p>• Höhere Planungsqualität in der Projektierung ermöglicht genauere Kostenvoranschläge und
                                    Ausschreibungen, weniger Nachträge und Projektänderungen</p>
                                <p>• Stellt sicher, dass wichtige Fragen der Bauherrschaft frühzeitig gestellt werden</p>
                                <p>• Sofort erkennbarer Stand von Planung und Qualitätskontrolle</p>
                                <p>• Erfahrungen werden für andere Projekte anwendbar</p>
                                <p>• Immer verfügbar - funktioniert auf allen mobilen Geräten</p>
                            </div>
                        </article>
                    </div>';

        if ($lang == 'de') {
            $content = $de; 
        } else if ($lang == 'en') {
            $content = $en; 
        }

        echo ' 
            <div class="tiles">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child box">
                                <p class="title">'.$content['Learn_from_Experience'].'</p>
                            </article>
                            <article class="tile is-child box">
                            '. $content['features'] .'
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <figure class="image ">
                                    <a href="services.html">
                                        <img src="images\glass.jpg">
                                    </a>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                        '. $content['our_services'] .'
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="content">
                        '. $content['benefits'] .'
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            </div>  ';
    }
?>