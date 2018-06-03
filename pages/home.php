<?php
    function displayHomePage($lang) {
        $en = [];
        $de = [];
        $content = [];
        $en['features'] = '
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
                    ';
        $de['features'] = '
                        <p>AppEx ist eine Web-basiertes Planungs- und Analysetool für alle, die in Planungs- und
                        Bauprojekten koordinative Aufgaben wahrnehmen. AppEx basiert auf Erfahrungen. Es
                        ermöglicht Nutzern die Planung von Aktivitäten mit Hilfe von eigenen oder in einer
                        Gruppe geteilten Erfahrungen.
                        </p>
                        <br>
                        <p>AppEx ermöglicht es, Lösungen zu Problemen zu dokumentieren und bei Phasenende die Qualität
                            von Arbeitsprodukten oder Dienstleistungen zu überprüfen.</p>
                        <br>
                        <p>AppEx visualisiert den Projektstatus grafisch, sodass der Stand von Planung und Qualitätssicherung
                            jederzeit klar erkennbar sind.
                        </p>
                        ';
        $en['our_services'] = 'Applied Experience GmbH develops and distributes the AppEx knowledge management software,
                                which can be deployed by individuals or firms. For firms we also offer consulting services
                                to develop inhouse knowledge management expertise. ';
        $de['our_services'] = 'Applied Experience GmbH entwickelt und vertreibt die AppEx Software, welche von Personen
                                und Firmen eingesetzt werden kann. Für Firmen bieten wir auch Beratung im Aufbau von
                                Wissensmanagement Expertise an.';

        $en['benefits'] = '<p>• Very easy to use. Saves time in the preparation of estimates, submittals, and field QC
                            documents
                            </p>
                            <p>• Higher planning quality in early project phases results in more accurate submittals, and
                                cost estimates. This means fewer change orders, rework and claims </p>
                            <p>• Helps you ask clients the important design questions early </p>
                            <p>• See project status at a glance, including potential risks and open issues</p>
                            <p>• Make experiences actionable for future projects</p>
                            <p>• Always available - works on all mobile devices';

        $de['benefits'] = '  <p>• Sehr einfache Anwendung. Spart Zeit und vermeidet Fehler in der Erstellung von Plänen,
                                Kostenvoranschlägen und Submissionen, sowie in der Qualitätskontrolle auf der Baustelle</p>
                            <p>• Höhere Planungsqualität in der Projektierung ermöglicht genauere Kostenvoranschläge und
                                Ausschreibungen, weniger Nachträge und Projektänderungen</p>
                            <p>• Stellt sicher, dass wichtige Fragen der Bauherrschaft frühzeitig gestellt werden</p>
                            <p>• Sofort erkennbarer Stand von Planung und Qualitätskontrolle</p>
                            <p>• Erfahrungen werden für andere Projekte anwendbar</p>
                            <p>• Immer verfügbar - funktioniert auf allen mobilen Geräten</p>';

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
                                <p class="title"> Learn from Experience</p>
                            </article>
                            <article class="tile is-child box">
                                <p class="title">Features</p>
                                <div class="content">
                                    <article class="message is-dark">
                                        <div class="message-body">
                                        '. $content['features'] .'
                                        </div>
                                    </article>
                                </div>
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
                            <p class="title">Our services</p>
                            <div class="content">
                                <article class="message is-dark">
                                    <div class="message-body">
                                        <p>
                                        '. $content['our_services'] .'
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="content">
                            <p class="title">Benefits</p>
                            <div class="content">
                                <article class="message is-dark">
                                    <div class="message-body">
                                    '. $content['benefits'] .'
                                    </div>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            </div>  ';
    }
?>