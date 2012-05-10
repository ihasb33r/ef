<?php

/* AcmeUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7462950c6961c8a48ba1675ecf7733cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\"><div class=\"six columns offset-by-one\">
<tr><h4>Αγορασμένα:</h4></tr>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "buy"));
        foreach ($context['_seq'] as $context["_key"] => $context["buy"]) {
            // line 11
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 12
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
                foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                    // line 13
                    echo "\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($this->getContext($context, "buy"), "user"), "id") == $this->getContext($context, "key")) && ($this->getAttribute($this->getAttribute($this->getContext($context, "buy"), "sell"), "id") == $this->getAttribute($this->getContext($context, "sell"), "id")))) {
                        echo "\t
\t\t\t\t";
                        // line 14
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                            // line 15
                            echo "\t\t\t\t\t";
                            if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                                // line 16
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 17
                                    echo "\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                        // line 18
                                        echo "\t\t\t\t\t\t\t\t<h6>Η ημερομηνία του παζαριού είναι:";
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d/m/Y"), "html", null, true);
                                        echo "</h6>
\t\t\t\t\t\t<h6>Έχετε αγοράσει το προϊόν: ";
                                        // line 19
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                        echo "</h6>
\t\t\t\t\t\t\t";
                                    }
                                    // line 21
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 22
                                echo "\t\t\t\t\t";
                            }
                            // line 23
                            echo "
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 25
                        echo "\t\t\t<h6>Σε ποσότητα:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "buy"), "quantity"), "html", null, true);
                        echo " κιλά</h6></br>
\t\t\t";
                    }
                    // line 27
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 28
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['buy'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "
<tr><h4>Προς πώληση:</h4></tr>
";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 33
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 34
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id") == $this->getContext($context, "key"))) {
                    echo "\t
\t\t\t";
                    // line 35
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
                    foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                        // line 36
                        echo "\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                            // line 37
                            echo "\t\t\t\t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 38
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                    // line 39
                                    echo "\t\t\t\t\t\t<h6>Η ημερομηνία του παζαριού είναι:";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d/m/Y"), "html", null, true);
                                    echo "</h6>
\t\t\t\t\t\t\t<h6>Πουλάτε το προϊόν: ";
                                    // line 40
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                    echo "</h6>
\t\t\t\t\t\t";
                                }
                                // line 42
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 43
                            echo "\t\t\t\t";
                        }
                        // line 44
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 45
                    echo "\t\t\t\t<h6>Σε ποσότητα: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
                    echo " κιλά</h6>
\t\t\t<h6>Με ελάχιστη ποσότητα αγοράς: ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "minquantity"), "html", null, true);
                    echo " κιλά</h6></br>
\t\t";
                }
                // line 48
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "</div>
</div>
";
    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        // line 54
        echo "<div class=\"three colums nava\">
\t<div class=\"art-vmenublock\">
\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublock-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"art-vmenu\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pazari\" ><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αρχική</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile\" class=\"active\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Προφίλ</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"price\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Τιμοκατάλογος</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"logout\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αποσύνδεση</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
