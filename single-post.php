<?php get_header(); ?>
<div style="border-bottom: 1px solid #000">
    <?php if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs" style="margin-bottom: 0">', '</p>');
    } ?>
</div>
<div class="row bg-light" style="margin: 0;">
    <div class="col-lg-8 posts-font" style="padding: 0 !important; border-right: 1px solid #000">
        <div class="text-center">
            <div style="padding: 30px 0">
                <?php if (have_posts()) {
                    the_post(); ?>
                    <h1 class="text-center" style="padding: 0 0 20px 0;"><?php the_title(); ?></h1>
                    <img src="<?php the_post_thumbnail_url(); ?>" width="450" height="auto" alt="" srcset="">
                    <div class="row">
                        <span class="col-6"> <span class="badge bg-dark"><i class="fa fa-user"></i> <?php the_author() ?></span> </span><span class="col-6"><span class="badge bg-dark"><i class="fa fa-calendar"></i> <?php the_date() ?></span></span>
                    </div>
                    <p><?php the_excerpt() ?></p>
                <?php } ?>
            </div>

        </div>
    </div>

    <?php
    $secondary_query = new WP_Query();
    ?>
    <div class="col-lg-4" style="padding: 0;">
        <table>
            <tr class="bg-info">
                <td style="padding: 25px;">
                    <h1>ARTICLES RÉCENTS</h1>
                </td>
            </tr>
            <tr>
                <td style="padding: 25px;">
                    <?php
                    $recent_posts = wp_get_recent_posts(array());
                    foreach ($recent_posts as $post_item) : ?>
                        <div class="d-flex" style="border-bottom: 1px solid #000; background-color: aliceblue; border-radius: 10px; margin-bottom: 5px">
                            <a style="text-decoration: none; color: black; vertical-align: middle" href="<?php echo get_permalink($post_item['ID']); ?>"><?php echo get_the_post_thumbnail($post_item['ID'], '10', ['alt' => '', 'style' => 'height:150px; width:150px;']); ?>
                                <h3 class="d-inline"><?php echo $post_item['post_title']; ?></h3>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <table style="width: 100%; text-align:center" class="bg-white table-condensed table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="7">
                                                <span class="btn-group">
                                                    <a class="btn"><i class="icon-chevron-left"></i></a>
                                                    <?php echo date('d M Y') ?>
                                                    <a class="btn"><i class="icon-chevron-right"></i></a>
                                                </span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>lu</th>
                                            <th>ma</th>
                                            <th>me</th>
                                            <th>je</th>
                                            <th>ve</th>
                                            <th>sa</th>
                                            <th>di</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>30</td>
                                            <td>31</td>
                                            <td class="muted">1</td>
                                            <td class="muted">2</td>
                                            <td class="muted">3</td>
                                            <td class="muted">4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php get_footer(); ?>