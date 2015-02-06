<?php

/*******************************************************************************
 * Copyright (c) cortical.io GmbH. All rights reserved.
 *
 * This software is confidential and proprietary information.
 * You shall use it only in accordance with the terms of the
 * license agreement you entered into with cortical.io GmbH.
 ******************************************************************************/
class Metric
{

    static $swaggerTypes = array(
        'sizeRight' => 'int',
        'sizeLeft' => 'int',
        'overlappingAll' => 'int',
        'euclideanDistance' => 'float',
        'jaccardDistance' => 'float',
        'cosineSimilarity' => 'float',
        'overlappingLeftRight' => 'float',
        'overlappingRightLeft' => 'float',
        'weightedScoring' => 'float'

    );

    /**
     * Get Size-Right.
     */
    public $sizeRight; // int
    /**
     * Get Size-left.
     */
    public $sizeLeft; // int
    /**
     * Get Overlapping-All.
     */
    public $overlappingAll; // int
    /**
     * Get Euclidean-Distance.
     */
    public $euclideanDistance; // float
    /**
     * Get Jaccard-Distance.
     */
    public $jaccardDistance; // float
    /**
     * Get Cosine-Similarity.
     */
    public $cosineSimilarity; // float
    /**
     * Get Overlapping-Left-Right.
     */
    public $overlappingLeftRight; // float
    /**
     * Get Overlapping-Right-Left.
     */
    public $overlappingRightLeft; // float
    /**
     * Get the Weighted-Scoring.
     */
    public $weightedScoring; // float
}

