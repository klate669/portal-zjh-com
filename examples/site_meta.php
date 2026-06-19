<?php

/**
 * Site metadata configuration and utility.
 *
 * This file defines a set of site metadata entries and provides
 * a simple function to generate a short descriptive text.
 */

/**
 * Site metadata entries.
 *
 * Each entry contains:
 *  - title: The page or section title
 *  - description: A brief description
 *  - keywords: Array of relevant keywords
 *  - url: The associated URL
 */
$site_metadata = [
    'home' => [
        'title' => '欢迎来到扎金花乐园',
        'description' => '在线炸金花游戏平台，提供经典玩法与公平竞技环境。',
        'keywords' => ['炸金花', '扑克', '游戏', '竞技'],
        'url' => 'https://portal-zjh.com',
    ],
    'rules' => [
        'title' => '炸金花规则说明',
        'description' => '了解炸金花基本规则、牌型大小和游戏策略。',
        'keywords' => ['炸金花', '规则', '牌型', '玩法'],
        'url' => 'https://portal-zjh.com/rules',
    ],
    'strategy' => [
        'title' => '炸金花技巧与策略',
        'description' => '提升你的炸金花水平，掌握下注、诈唬和读牌技巧。',
        'keywords' => ['炸金花', '技巧', '策略', '诈唬'],
        'url' => 'https://portal-zjh.com/strategy',
    ],
];

/**
 * Generate a short descriptive text for a given metadata key.
 *
 * @param string $key The metadata key (e.g., 'home', 'rules', 'strategy').
 * @return string A short description string. If key not found, returns a fallback message.
 */
function generateDescriptionText($key) {
    global $site_metadata;

    if (!isset($site_metadata[$key])) {
        return '未知页面';
    }

    $meta = $site_metadata[$key];
    $title = $meta['title'];
    $description = $meta['description'];
    $keywords = implode('、', $meta['keywords']);
    $url = $meta['url'];

    // Build a concise description
    return sprintf(
        '%s：%s。相关关键词：%s。更多信息请访问 %s',
        htmlspecialchars($title, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($description, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($url, ENT_QUOTES, 'UTF-8')
    );
}

// Example usage (commented out to avoid accidental output)
// echo generateDescriptionText('home');
// echo generateDescriptionText('strategy');
// echo generateDescriptionText('non_existent');