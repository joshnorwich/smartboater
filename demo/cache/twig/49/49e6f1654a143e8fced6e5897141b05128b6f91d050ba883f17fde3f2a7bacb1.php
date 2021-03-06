<?php

/* @particles/infolist.html.twig */
class __TwigTemplate_67df3e308a294d5a7aff1f72f744d9bde947bef4a045fdb78437e05bdeb14c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/infolist.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title g-infolist-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
    ";
        // line 7
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "intro", array())) {
            // line 8
            echo "        <p>";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "intro", array());
            echo "</p>
    ";
        }
        // line 10
        echo "
    <div class=\"g-infolist ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "infolists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["infolist"]) {
            // line 14
            echo "            <div class=\"g-infolist-item";
            if ($this->getAttribute($context["infolist"], "icon", array())) {
                echo " g-infolist-with-icon";
            }
            if ($this->getAttribute($context["infolist"], "image", array())) {
                echo " g-infolist-with-img";
            }
            echo " ";
            if ((($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "center")) || ($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "center")))) {
                echo "center";
            }
            echo "\">

                ";
            // line 16
            ob_start();
            // line 17
            echo "                    <div class=\"g-infolist-item-icon ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "iconloc", array()));
            echo "\">
                        <i class=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "icon", array()));
            echo "\"></i>
                    </div>
                ";
            $context["icondata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
                ";
            // line 22
            ob_start();
            // line 23
            echo "                    <div class=\"g-infolist-item-img g-block";
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "compact")) {
                echo " size-22";
            }
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                echo " browser";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "imageloc", array()));
            echo " ";
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "avatar")) {
                echo "avatar";
            }
            echo "\">
                        ";
            // line 24
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 25
                echo "                        <div class=\"browser-wrapper\">
                            <div class=\"browser-bar\">
                                <span class=\"browser-button\"></span>
                            </div>
                        ";
            }
            // line 30
            echo "
                            <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["infolist"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["infolist"], "title", array())));
            echo "\" />

                        ";
            // line 33
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 34
                echo "                        </div>
                        ";
            }
            // line 36
            echo "                    </div>
                ";
            $context["imagedata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
                ";
            // line 39
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "left"))) {
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["icondata"]) ? $context["icondata"] : null), "html", null, true);
                echo "
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "left"))) {
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["imagedata"]) ? $context["imagedata"] : null), "html", null, true);
                echo "
                ";
            }
            // line 46
            echo "
                <div class=\"g-infolist-item-text";
            // line 47
            if (($this->getAttribute($context["infolist"], "icon", array()) || $this->getAttribute($context["infolist"], "image", array()))) {
                echo " ";
            }
            echo " g-infolist-textstyle-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "textstyle", array()), "html", null, true);
            echo "\">
                    ";
            // line 48
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "center"))) {
                // line 49
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["icondata"]) ? $context["icondata"] : null), "html", null, true);
                echo "
                    ";
            }
            // line 51
            echo "
                    ";
            // line 52
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "center"))) {
                // line 53
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["imagedata"]) ? $context["imagedata"] : null), "html", null, true);
                echo "
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if (($this->getAttribute($context["infolist"], "tag", array()) || $this->getAttribute($context["infolist"], "subtag", array()))) {
                // line 57
                echo "                        <div class=\"g-infolist-tags\">
                            ";
                // line 58
                if ($this->getAttribute($context["infolist"], "tag", array())) {
                    // line 59
                    echo "                                ";
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 60
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                        echo "\">
                                ";
                    }
                    // line 62
                    echo "
                                    <span class=\"g-tag\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "tag", array()));
                    echo "</span>

                                ";
                    // line 65
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 66
                        echo "                                </a>
                                ";
                    }
                    // line 68
                    echo "                            ";
                }
                // line 69
                echo "
                            ";
                // line 70
                if ($this->getAttribute($context["infolist"], "subtag", array())) {
                    // line 71
                    echo "                                <span class=\"g-small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "subtag", array()));
                    echo "</span>
                            ";
                }
                // line 73
                echo "                        </div>
                    ";
            }
            // line 75
            echo "
                    ";
            // line 76
            if ($this->getAttribute($context["infolist"], "title", array())) {
                // line 77
                ob_start();
                // line 78
                echo "<div class=\"g-infolist-item-title ";
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "bold")) {
                    echo "g-bold";
                }
                echo "\">";
                // line 79
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 80
                    echo "<div class=\"g-title-hero\">";
                }
                // line 83
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 84
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                    echo "\">";
                }
                // line 87
                echo $this->getAttribute($context["infolist"], "title", array());
                // line 89
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 90
                    echo "</a>";
                }
                // line 93
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 94
                    echo "</div>";
                }
                // line 96
                echo "</div>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
            // line 99
            echo "
                    ";
            // line 100
            if ($this->getAttribute($context["infolist"], "desc", array())) {
                // line 101
                echo "                        <div class=\"g-infolist-item-desc\">
                            ";
                // line 102
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 103
                    echo "                            <div class=\"g-large\">
                            ";
                }
                // line 105
                echo "
                                ";
                // line 106
                echo $this->getAttribute($context["infolist"], "desc", array());
                echo "

                            ";
                // line 108
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 109
                    echo "                            </div>
                            ";
                }
                // line 111
                echo "                        </div>
                    ";
            }
            // line 113
            echo "
                    ";
            // line 114
            if ($this->getAttribute($context["infolist"], "link", array())) {
                // line 115
                echo "                        <div class=\"g-infolist-link\">
                            <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "readmoreclass", array()));
                echo "\">
                                ";
                // line 117
                if ($this->getAttribute($context["infolist"], "buttonicon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "buttonicon", array()));
                    echo "\"></i>";
                }
                // line 118
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "label", array()));
                echo "
                            </a>
                        </div>
                    ";
            }
            // line 122
            echo "                </div>

                ";
            // line 124
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "right"))) {
                // line 125
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["icondata"]) ? $context["icondata"] : null), "html", null, true);
                echo "
                ";
            }
            // line 127
            echo "
                ";
            // line 128
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "right"))) {
                // line 129
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["imagedata"]) ? $context["imagedata"] : null), "html", null, true);
                echo "
                ";
            }
            // line 131
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/infolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 133,  376 => 131,  370 => 129,  368 => 128,  365 => 127,  359 => 125,  357 => 124,  353 => 122,  345 => 118,  339 => 117,  331 => 116,  328 => 115,  326 => 114,  323 => 113,  319 => 111,  315 => 109,  313 => 108,  308 => 106,  305 => 105,  301 => 103,  299 => 102,  296 => 101,  294 => 100,  291 => 99,  287 => 96,  284 => 94,  282 => 93,  279 => 90,  277 => 89,  275 => 87,  268 => 84,  266 => 83,  263 => 80,  261 => 79,  255 => 78,  253 => 77,  251 => 76,  248 => 75,  244 => 73,  238 => 71,  236 => 70,  233 => 69,  230 => 68,  226 => 66,  224 => 65,  219 => 63,  216 => 62,  208 => 60,  205 => 59,  203 => 58,  200 => 57,  198 => 56,  195 => 55,  189 => 53,  187 => 52,  184 => 51,  178 => 49,  176 => 48,  168 => 47,  165 => 46,  159 => 44,  157 => 43,  154 => 42,  148 => 40,  146 => 39,  143 => 38,  139 => 36,  135 => 34,  133 => 33,  126 => 31,  123 => 30,  116 => 25,  114 => 24,  98 => 23,  96 => 22,  93 => 21,  87 => 18,  82 => 17,  80 => 16,  65 => 14,  61 => 13,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}

    {% if particle.title %}<h2 class=\"g-title g-infolist-title\">{{ particle.title|raw }}</h2>{% endif %}

    {% if particle.intro %}
        <p>{{ particle.intro|raw }}</p>
    {% endif %}

    <div class=\"g-infolist {{ particle.cols|e }} {{ particle.class|e }}\">

        {% for infolist in particle.infolists %}
            <div class=\"g-infolist-item{% if infolist.icon %} g-infolist-with-icon{% endif %}{% if infolist.image %} g-infolist-with-img{% endif %} {% if infolist.image and infolist.imageloc == 'center' or infolist.icon and infolist.iconloc == \"center\" %}center{% endif %}\">

                {% set icondata %}
                    <div class=\"g-infolist-item-icon {{ infolist.iconloc|e }}\">
                        <i class=\"{{ infolist.icon|e }}\"></i>
                    </div>
                {% endset %}

                {% set imagedata %}
                    <div class=\"g-infolist-item-img g-block{% if infolist.imagestyle == 'compact' %} size-22{% endif %}{% if infolist.imagestyle == 'browser' %} browser{% endif %} {{ infolist.imageloc|e }} {% if infolist.imagestyle == 'avatar' %}avatar{% endif %}\">
                        {% if infolist.imagestyle == 'browser' %}
                        <div class=\"browser-wrapper\">
                            <div class=\"browser-bar\">
                                <span class=\"browser-button\"></span>
                            </div>
                        {% endif %}

                            <img src=\"{{ url(infolist.image)|e }}\" alt=\"{{ url(infolist.title)|e }}\" />

                        {% if infolist.imagestyle == 'browser' %}
                        </div>
                        {% endif %}
                    </div>
                {% endset %}

                {% if infolist.icon and infolist.iconloc == 'left' %}
                    {{ icondata }}
                {% endif %}

                {% if infolist.image and infolist.imageloc == 'left' %}
                    {{ imagedata }}
                {% endif %}

                <div class=\"g-infolist-item-text{% if infolist.icon or infolist.image %} {% endif %} g-infolist-textstyle-{{ infolist.textstyle }}\">
                    {% if infolist.icon and infolist.iconloc == 'center' %}
                        {{ icondata }}
                    {% endif %}

                    {% if infolist.image and infolist.imageloc == 'center' %}
                        {{ imagedata }}
                    {% endif %}

                    {% if infolist.tag or infolist.subtag %}
                        <div class=\"g-infolist-tags\">
                            {% if infolist.tag %}
                                {% if infolist.link %}
                                <a href=\"{{ infolist.link|e }}\" target=\"{{ infolist.readmoretarget|default('_self')|e }}\">
                                {% endif %}

                                    <span class=\"g-tag\">{{ infolist.tag|e }}</span>

                                {% if infolist.link %}
                                </a>
                                {% endif %}
                            {% endif %}

                            {% if infolist.subtag %}
                                <span class=\"g-small\">{{ infolist.subtag|e }}</span>
                            {% endif %}
                        </div>
                    {% endif %}

                    {% if infolist.title -%}
                        {%- spaceless -%}
                        <div class=\"g-infolist-item-title {% if infolist.textstyle == 'bold' %}g-bold{% endif %}\">
                            {%- if infolist.textstyle == 'large' -%}
                            <div class=\"g-title-hero\">
                            {%- endif -%}

                                {%- if infolist.link -%}
                                <a href=\"{{ infolist.link|e }}\" target=\"{{ infolist.readmoretarget|default('_self')|e }}\">
                                {%- endif -%}

                                {{- infolist.title|raw -}}

                                {%- if infolist.link -%}
                                </a>
                                {%- endif -%}

                            {%- if infolist.textstyle == 'large' -%}
                            </div>
                            {%- endif -%}
                        </div>
                    {%- endspaceless %}
                    {%- endif %}

                    {% if infolist.desc %}
                        <div class=\"g-infolist-item-desc\">
                            {% if infolist.textstyle == 'large' %}
                            <div class=\"g-large\">
                            {% endif %}

                                {{ infolist.desc|raw }}

                            {% if infolist.textstyle == 'large' %}
                            </div>
                            {% endif %}
                        </div>
                    {% endif %}

                    {% if infolist.link %}
                        <div class=\"g-infolist-link\">
                            <a href=\"{{ infolist.link|e }}\" target=\"{{ infolist.readmoretarget|default('_self')|e }}\" class=\"{{ infolist.readmoreclass|e }}\">
                                {% if infolist.buttonicon %}<i class=\"{{ infolist.buttonicon|e }}\"></i>{% endif %}
                                {{ infolist.label|e }}
                            </a>
                        </div>
                    {% endif %}
                </div>

                {% if infolist.icon and infolist.iconloc == 'right' %}
                    {{ icondata }}
                {% endif %}

                {% if infolist.image and infolist.imageloc == 'right' %}
                    {{ imagedata }}
                {% endif %}
            </div>
        {% endfor %}

    </div>

{% endblock %}
", "@particles/infolist.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/infolist.html.twig");
    }
}
