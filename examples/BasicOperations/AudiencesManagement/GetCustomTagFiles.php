<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取客户标签数据文件(Custom tag file)列表的简单示例
 */
class GetCustomTagFiles
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $TAG_ID       = 'YOUR TAG ID'; // 标签ID

    public function init()
    {
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        $tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        static::$tads = $tads;

        return $tads;
    }

    public function main()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $fields = [
                'tag_id', 'custom_tag_file_id', 'name', 'user_id_type', 'operation_type', 'open_app_id',
                'process_status', 'process_code', 'error_message', 'line_count', 'valid_line_count',
                'user_count', 'created_time',
            ]; // 需要返回的字段
            $response = $tads->customTagFiles()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'tag_id'     => static::$TAG_ID,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Tag File信息
            foreach ($response->getList() as $tagFileInfo) {
                // echo $tagFileInfo . PHP_EOL;
            }

            return $response;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new GetCustomTagFiles();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}